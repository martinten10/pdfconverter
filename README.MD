PDFconverter


环境需求：
windows 2008
Adobe Acrobat DC

实现原理：
通过windows COM接口，调用Arcobat实现文档转换。

转换格式支持
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

注意事项：

php需开启COM支持；转换时Arcobat程序出错的话，需要自行监控关闭