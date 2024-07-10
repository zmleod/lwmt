<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>生产过程数据追溯系统</title>
  <!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
  <link href="../../../../assets/css/layui.css" rel="stylesheet">
  <script src="../../../../assets/js/layui.js"></script>
  <script src="../../../../assets/js/jquery.min.js"></script>
</head>

<body>
  <fieldset class="layui-elem-field layui-field-title">
    <legend>甩带数据填报</legend>
  </fieldset>
  <form class="layui-form" action="">
    <div class="layui-form-item">
      <label class="layui-form-label">填表人</label>
      <div class="layui-input-block">
        <input type="radio" name="shuaidai_tianbiaoren" value="刁显源" title="刁显源" checked>
        <!--        <input type="radio" name="shuaidai_tianbiaoren" value="林德文" title="林德文">
      <input type="radio" name="shuaidai_tianbiaoren" value="梁国军" title="梁国军" >-->
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">参与人</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_canyuren" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <!--
  <div class="layui-form-item">
    <label class="layui-form-label">前序工艺</label>
    <div class="layui-input-block">
      <select name="laiyuan_daima">
        <option value="wg">外购</option>
           <option value="cn_010">熔炼</option>
        <option value="其它选项联系管理员更改">其它选项联系管理员更改</option>
       </select>
    </div>
  </div>-->

    <div class="layui-form-item">
      <label class="layui-form-label">溯源代号(主要)</label>
      <div class="layui-input-block">
        <input type="text" name="laiyuan_picihao" placeholder="本厂熔炼填炉号（如HA01-240503-01）；外购料填领料单据号（如SCLL-20240510-00004，可简写为240510-4）" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">溯源代号(补充)</label>
      <div class="layui-input-block">
        <input type="text" name="laiyuan_picihao_add" placeholder="不止一批原料时，填写次要原料代号" autocomplete="off" class="layui-input">
      </div>
    </div>



    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">甩带设备</label>
        <div class="layui-input-block">
          <select name="shuaidai_shebei" id="shuaidai_shebei" lay-filter="shuaidai_shebei">
            <option value="01">1#</option>
            <option value="02">2#</option>
          </select>
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">甩带日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="shuaidai_riqi" id="shuaidai_riqi" placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">炉号</label>
        <div class="layui-input-block">
          <input type="text" name="shuaidai_luhao" id="shuaidai_luhao" placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>
    </div>




    <div class="layui-form-item">
      <label class="layui-form-label">牌号</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_paihao" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>


    <div class="layui-form-item">
      <label class="layui-form-label">合金重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_hejin_zhongliang" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">制粉重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_zhifen_zhongliang" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">坩埚</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_ganguo" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">坩埚频次</label>
      <div class="layui-input-block">
        <input type="text" name="ganguo_pinci" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">阀杆</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_fagan" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">阀杆频次</label>
      <div class="layui-input-block">
        <input type="text" name="fagan_pinci" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">喷嘴</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_penzui" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">喷嘴频次</label>
      <div class="layui-input-block">
        <input type="text" name="penzui_pinci" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">弹簧频次</label>
      <div class="layui-input-block">
        <input type="text" name="tanhuang_pinci" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">线速度</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_xiansudu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">时间</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_shijian" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">流道数量</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_liudao_shuliang" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>


    <div class="layui-form-item">
      <label class="layui-form-label">坩埚始压(KPa)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_pendai_yali" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">坩埚终压(KPa)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_pendai_yali_2" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">辊嘴间距(mm)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_gunzui_jianju" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">起始镁液温度(℃)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_qishi_meiye_wendu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">带材厚度(μm)</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_daicai_houdu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>


    <div class="layui-form-item">
      <label class="layui-form-label">带材宽度(mm)</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_daicai_kuandu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">静置时间(min)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_jingzhi_shijian" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">氧气浓度_始(%)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_yangqi_nongdu" placeholder="" autocomplete="off" class="layui-input">
      </div>


    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">氧气浓度_终(%)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_yangqi_nongdu_2" placeholder="" autocomplete="off" class="layui-input">
      </div>


    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">CO2流量(L/min)</label>
      <div class="layui-input-block">
        <input type="number" name="CO2_1" placeholder="" autocomplete="off" class="layui-input">
      </div>


    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">CO2用量(m3)</label>
      <div class="layui-input-block">
        <input type="number" name="CO2_2" placeholder="" autocomplete="off" class="layui-input">
      </div>


    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">辊轮转速(r/min)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_gunlun_zhuansu_xiansudu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">抛光转速(r/min)</label>
      <div class="layui-input-block">
        <input type="number" name="shuaidai_paoguang_zhuansu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">抛光轮目数</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_paoguanglun_mushu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">空载运行负责人</label>
      <div class="layui-input-block">
        <input type="text" name="shuaidai_kongzai_fuzeren" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">备注</label>
      <div class="layui-input-block">
        <textarea name="shuaidai_beizhu" placeholder="结果、问题或其它需要补充的信息" class="layui-textarea"></textarea>
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-input-block">
        <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>
      </div>
    </div>
  </form>
  <script>
    layui.use(function() {
      var form = layui.form;
      var layer = layui.layer;
      var laydate = layui.laydate;
      var util = layui.util;
      var $ = layui.jquery;
      var today = new Date();


      form.on('submit(demo1)', function(data) {
        var field = data.field; // 获取表单字段值
        // 显示填写结果，仅作演示用

        $.post('../action/add_cool_action.php', JSON.stringify(data.field), function(res) {
          // 处理PHP脚本返回的结果
          if (res.code == '0') {
            alert("数据新增成功");
            window.location.href = "../index_cool.php";
          }
        }, 'json');
        return false; // 阻止默认 form 跳转
      });





      // 日期
      laydate.render({
        elem: '#shuaidai_riqi',
        value: today // 设置默认值为今天
          ,
        done: function(value, date, endDate) {
          // 当日期改变时，更新其他文本框的值
          value = value.substring(2); //去掉前两位
          value = value.replace(/-/g, ""); //f去掉“-”
          document.getElementById('shuaidai_luhao').value = 'HB' + document.getElementById('shuaidai_shebei').value + '-' + value + '-';
        }
      });


      form.on('select(shuaidai_shebei)', function(data) {
        var select_value = data.value; // 获取下拉框选中的值
        var date_value = document.getElementById('shuaidai_riqi').value; //获取日期值准备格式化
        date_value = date_value.substring(2); //去掉前两位
        date_value = date_value.replace(/-/g, ""); //f去掉“-”

        document.getElementById('shuaidai_luhao').value = 'HB' + select_value + '-' + date_value + '-'; // 将值设置到文本框
      });



    });
    var shuaidai_shebei = document.getElementById('shuaidai_shebei').value;
    let date = new Date();
    let formattedDate = date.toISOString().slice(2, 10).replace(/-/g, '')

    document.getElementById('shuaidai_luhao').value = 'HB01-' + formattedDate + '-';
  </script>
</body>

</html>