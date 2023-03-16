<?php
class Download
{
    public function putContentsFile($path, $data)
    {
        file_put_contents($path, $data);
    }
}