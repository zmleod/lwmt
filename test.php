<iframe id="myIframe" src="test2.php"></iframe>

<script>
// 获取第一个iframe元素
var iframeElement = document.getElementsByTagName('iframe')[0];

// 监听iframe加载完成事件
iframeElement.addEventListener('load', function() {
    // 获取iframe的内容文档
    var iframeDoc = this.contentDocument || this.contentWindow.document;

    // 隐藏所有的<em>标签
    var emElements = iframeDoc.getElementsByTagName('em');
    for (var i = 0; i < emElements.length; i++) {
        emElements[i].style.display = 'none';
    }
});
</script>