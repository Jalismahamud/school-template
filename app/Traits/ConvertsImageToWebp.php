<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ConvertsImageToWebp
{
    /**
     * Convert an uploaded image to webp and store it on the public disk.
     * Returns the stored path (relative to the public disk) or null if no file given.
     */
    protected function storeAsWebp(?UploadedFile $file, string $directory): ?string
    {
        if (! $file) {
            return null;
        }

        $image = match ($file->getMimeType()) {
            'image/jpeg' => imagecreatefromjpeg($file->getRealPath()),
            'image/png' => imagecreatefrompng($file->getRealPath()),
            'image/webp' => imagecreatefromwebp($file->getRealPath()),
            'image/gif' => imagecreatefromgif($file->getRealPath()),
            default => null,
        };

        $filename = $directory.'/'.Str::random(20).'.webp';

        if (! $image) {
            // Fallback: store the original file untouched if it's not a format GD can decode.
            return $file->storeAs($directory, Str::random(20).'.'.$file->extension(), 'public');
        }

        imagepalettetotruecolor($image);
        imagealphablending($image, true);
        imagesavealpha($image, true);

        $tmpPath = tempnam(sys_get_temp_dir(), 'webp');
        imagewebp($image, $tmpPath, 85);
        imagedestroy($image);

        Storage::disk('public')->put($filename, file_get_contents($tmpPath));
        unlink($tmpPath);

        return $filename;
    }

    protected function deleteStoredImage(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
