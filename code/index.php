<?php
    /**
     * 转换格式支持
     *  
        com.adobe.acrobat.doc                   doc
        com.adobe.acrobat.docx                  docx
        com.adobe.acrobat.xlsx                  xlsx
        com.adobe.acrobat.pptx                  pptx
        com.adobe.acrobat.eps                   eps
        com.adobe.acrobat.html-3-20             html, htm
        com.adobe.acrobat.html-4-01-css-1-00    html, htm
        com.adobe.acrobat.jpeg                  jpeg, jpg, jpe
        com.adobe.acrobat.jp2k                  jpf, jpx, jp2, j2k, j2c,jpc
        com.adobe.acrobat.png                   png
        com.adobe.acrobat.ps                    ps
        com.adobe.acrobat.rtf                   rtf
        com.adobe.acrobat.accesstext            txt
        com.adobe.acrobat.plain-text            txt
        com.adobe.acrobat.tiff                  tiff, tif
        com.adobe.acrobat.xml-1-00              xml
     * 
     */

    /**
     * pdf2office转换器
     * @param type $data
     */
    function pdfConverter($src,$dst,$type){
        $pddoc = new \COM("AcroExch.PDDoc");
        $pddoc->Open($src);
        $jso = $pddoc->GetJSObject();
        $jso->SaveAs($dst,$type);
        $pddoc->Close();
    }
    $src = getcwd() . "/docs/test.pdf";    //必须使用绝对路径
    $dst = getcwd() . "/docs/test.docx";
    $type = "com.adobe.acrobat.docx";    //word docx文件
    pdfConverter($src,$dst,$type);

?>