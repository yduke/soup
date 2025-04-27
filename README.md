# Poisoned Chicken Soup 毒鸡汤

*毒鸡汤改进版*

原程序由[egotong](https://github.com/egotong/nows)创建。

本分支在原基础上进行大量代码改进，并且新增了几条鸡汤。

内含1000多条毒鸡汤，每刷新页面或间隔10秒更换一句。

大致改进如下：

 1. ~~支持最新的PHP7系列版本；~~ 全静态化，无需php支持
 2. 参考了[ChenYFan](https://github.com/ChenYFan/Dujitang)，变为无数据库版，直接读取.data文件无需数据库支持；
 3. 加入了Service Worker，作为Web App 离线可用；
 4. Logo重新设计，并改为svg矢量logo；
 5. 样式改进，精简了css文件；
 6. 加入了十秒倒计时，十秒后自动刷新页面；
 7. 加入深色模式

[Demo](https://dukeyin.com/tool_old/soup/)

同原有程序一样，开源。加入MIT许可。


