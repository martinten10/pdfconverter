<h2>
	PDFconverter
</h2>
<br />
<h3>
	环境需求：
</h3>
<span style="color:#E53333;">windows server 2008 r2</span><br />
<span style="color:#E53333;">Adobe Acrobat DC</span><br />
<br />
<h3>
	实现原理：
</h3>
通过windows COM接口，调用Arcobat实现文档转换。<br />
<br />
<h3>
	转换格式支持：
</h3>
&nbsp; com.adobe.acrobat.doc&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;doc<br />
&nbsp; com.adobe.acrobat.docx&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; docx<br />
&nbsp; com.adobe.acrobat.xlsx&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; xlsx<br />
&nbsp; com.adobe.acrobat.pptx&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; pptx<br />
&nbsp; com.adobe.acrobat.eps&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;eps<br />
&nbsp; com.adobe.acrobat.html-3-20&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;html, htm<br />
&nbsp; com.adobe.acrobat.html-4-01-css-1-00&nbsp; &nbsp; html, htm<br />
&nbsp; com.adobe.acrobat.jpeg&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; jpeg, jpg, jpe<br />
&nbsp; com.adobe.acrobat.jp2k&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; jpf, jpx, jp2, j2k, j2c,jpc<br />
&nbsp; com.adobe.acrobat.png&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;png<br />
&nbsp; com.adobe.acrobat.ps&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ps<br />
&nbsp; com.adobe.acrobat.rtf&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;rtf<br />
&nbsp; com.adobe.acrobat.accesstext&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; txt<br />
&nbsp; com.adobe.acrobat.plain-text&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; txt<br />
&nbsp; com.adobe.acrobat.tiff&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tiff, tif<br />
&nbsp; com.adobe.acrobat.xml-1-00&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; xml<br />
<br />
<h3>
	注意事项：
</h3>
<span style="color:#E53333;">php需开启COM支持；转换时Arcobat程序出错的话，需要自行监控关闭</span><br />
