<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{
    public function index()
    {
        // Load current .env variables into the view
        $env = collect(file(base_path('.env'), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES))
            ->filter(fn($line) => strpos($line, '=') !== false)
            ->mapWithKeys(function ($line) {
                [$key, $value] = explode('=', $line, 2);
                return [$key => $value];
            });

        return view('config.index', compact('env'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'DB_HOST' => 'required',
            'DB_DATABASE' => 'required',
            'DB_USERNAME' => 'required',
            'MAIL_HOST' => 'nullable',
            'MAIL_USERNAME' => 'nullable',
        ]);

        // Update .env file
        $envPath = base_path('.env');
        $env = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($env as &$line) {
            foreach ($request->all() as $key => $value) {
                if (strpos($line, "{$key}=") === 0) {
                    $line = "{$key}={$value}";
                }
            }
        }

        file_put_contents($envPath, implode(PHP_EOL, $env));

        // Clear configuration cache
        Artisan::call('config:cache');

        return redirect()->route('config.index')->with('success', 'Configuration updated successfully.');
    }
}
