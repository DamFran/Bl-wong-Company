<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $imageFiles = [];

        if (File::exists(public_path('images'))) {
            $imageFiles = collect(File::files(public_path('images')))
                ->filter(function ($file) {
                    return in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'webp', 'gif']);
                })
                ->map(function ($file) {
                    return $file->getFilename();
                })
                ->values()
                ->all();
        }

        $heroBackground = collect($imageFiles)->first(function ($file) {
            $name = strtolower(pathinfo($file, PATHINFO_FILENAME));

            return str_contains($name, 'kulit') || str_contains($name, 'skin');
        }) ?? ($imageFiles[0] ?? null);

        $showcaseFiles = collect($imageFiles)
            ->reject(function ($file) {
                $name = strtolower(pathinfo($file, PATHINFO_FILENAME));

                return str_contains($name, 'kulit')
                    || str_contains($name, 'skin')
                    || str_contains($name, 'logo');
            })
            ->values()
            ->all();

        return view('company.index', [
            'heroBackground' => $heroBackground,
            'showcaseFiles' => $showcaseFiles,
        ]);
    }
}
