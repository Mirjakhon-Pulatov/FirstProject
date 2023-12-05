<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Backup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('user.partials.index', compact('projects'));
    }

    public function about()
    {
        return view('user.partials.about');
    }

    public function service()
    {
        return view('user.partials.service');
    }

    public function contact()
    {
        return view('user.partials.contact');
    }

    public function project()
    {
        $projects = Project::latest()->get();
        return view('user.partials.projects', compact('projects'));
    }

    public function view($id)
    {
//        dd($id);
        $vproject = Project::find($id);
        return view('user.partials.view', compact('vproject'));
    }

    public function backups(Backup $backups)
    {
        $backups = Backup::all();
        return view('auth.partials.backup', compact('backups'));
    }

    public function export_database()
    {

        $databaseName = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');

        $name = date('Y-m-d_H-i-s'). '.sql';
        $path = storage_path('app/uploads/');


        $outputFile = $path . $name;


        $command = "mysqldump --user={$username} --password={$password} --host={$host} {$databaseName} > {$outputFile}";

        // Execute the command
        exec($command);


        $files = scandir($path);
        // Проходим по списку и выводим только каталоги
        foreach ($files as $file) {
        // Исключаем текущий и родительский каталоги
        if ($file != '.' && $file != '..') {
        $fullPath = $path . '/' . $file;
        $size = filesize($outputFile);
        $size = $size / 1024;

        if ($size < 1024) {
            $size = floor($size);
            $size = $size . " кб";
        } else {
            $size = $size / 1024;
            $megabytes = floor($size);
            $kilobytes = round(($size - $megabytes) * 1024);
            $kilobytes = substr($kilobytes, 0, -1);
            $size = $megabytes . "." . $kilobytes . ' мб ';
        }



        // Проверяем, является ли элемент каталогом
        if (!is_dir($fullPath)) {
            echo 'Каталог: ' . $file . '<br>';
        }
        }
    }
    Backup::create([
        'time_name' => $name,
        'size' => $size
    ]);

        return redirect()->back();
    }

    /**
     * @param string $name
     * @return bool|\Illuminate\Http\JsonResponse
     */
    public function download_database(string $name)
    {
        $storagePath = storage_path("app/uploads/{$name}");

        if (file_exists($storagePath)) {
            return response()->download($storagePath, $name);
        } else {
            // File not found response
            return response()->json(['error' => 'File not found'], 404);
        }
    }

    public function delete_backups(Request $request)
    {
        // dd($request->all());
        $backups = Backup::findOrFail($request->backup_id);
        $backup_name = $backups->time_name;
        $file_path = storage_path('app/uploads/' . $backup_name);
        unlink($file_path);
        $backups->delete();

        return redirect()->back();
    }
}
