<?php

class Autoloader{

    private static $ext = ".php";

    private static $path = __DIR__;

    private static $fileIterator = null;

    public static function loader($className)
    {
        $directory = new RecursiveDirectoryIterator(static::$path, RecursiveDirectoryIterator::SKIP_DOTS);
        if (is_null(static::$fileIterator)) {
            static::$fileIterator = new RecursiveIteratorIterator($directory, RecursiveIteratorIterator::LEAVES_ONLY);
        }
        $filename = $className . static::$ext;
        foreach (static::$fileIterator as $file) {
            if (strtolower($file->getFilename()) === strtolower($filename)) {
                if ($file->isReadable()) {
                    include_once $file->getPathname();
                }
                break;
            }
        }
    }

    /**
     * Set the value of ext
     *
     * @return  void
     */ 
    public function setExt($ext)
    {
        static::$ext = $ext;
    }

    /**
     * Set the value of path
     *
     * @return  void
     */ 
    public function setPath($path)
    {
        static::$path = $path;
    }

}

spl_autoload_register("Autoloader::loader");