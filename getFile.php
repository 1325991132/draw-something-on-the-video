<?php 

function getFile($dir) {
    $fileArray[]=NULL;
    if (false != ($handle = opendir ( $dir ))) {
        $i=0;
        while ( false !== ($file = readdir ( $handle )) ) {
            //去掉"“.”、“..”以及带“.xxx”后缀的文件
            if ($file != "." && $file != ".."&&strpos($file,".")) {
                $fileArray[$i]="".$file;
                if($i==100){
                    break;
                }
                $i++;
            }
        }
        //关闭句柄
        closedir ( $handle );
    }
    return $fileArray;
}
$filearr = getFile("./video/");
// var_dump($filearr);
echo count($filearr);

 ?>