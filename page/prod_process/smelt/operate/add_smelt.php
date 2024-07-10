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
    <legend>熔炼数据填报</legend>
  </fieldset>
  <form class="layui-form" action="">



    <div class="layui-form-item">
      <label class="layui-form-label">填表人</label>
      <div class="layui-input-block">
        <input type="radio" name="ronglian_tianbiaoren" value="何兴路" title="何兴路" checked>
        <!--        <input type="radio" name="ronglian_tianbiaoren" value="林德文" title="林德文">
      <input type="radio" name="ronglian_tianbiaoren" value="梁国军" title="梁国军" >-->
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">参与人</label>
      <div class="layui-input-block">
        <input type="text" name="ronglian_canyuren" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>


    <div class="layui-form-item">
      <label class="layui-form-label">溯源代号(主要)</label>
      <div class="layui-input-block">
        <input type="text" name="laiyuan_picihao" placeholder="外购料填领料单据号（如SCLL-20240510-00004，可简写为240510-4）" autocomplete="off" class="layui-input">
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
        <label class="layui-form-label">熔炼设备</label>
        <div class="layui-input-block">
          <select name="ronglian_shebei" id="ronglian_shebei" lay-filter="ronglian_shebei">
            <option value="01">1#</option>
            <option value="02">2#</option>
          </select>
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">熔炼日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="ronglian_riqi" id="ronglian_riqi" placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">炉号</label>
        <div class="layui-input-block">
          <input type="text" name="ronglian_luhao" id="ronglian_luhao" placeholder="" autocomplete="off" class="layui-input">
        </div>
      </div>
    </div>




    <!--    
        <div class="layui-form-item">
    <label class="layui-form-label">熔炼批次号</label>
    <div class="layui-input-block">
      <input type="text" name="ronglian_picihao" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>-->
    <!--    
   <div class="layui-form-item">
    <label class="layui-form-label">材质</label>
    <div class="layui-input-block">
      <input type="text" name="ronglian_caizhi" placeholder="" autocomplete="off" class="layui-input">
    </div>
 </div>   -->
    <div class="layui-form-item">
      <label class="layui-form-label">牌号</label>
      <div class="layui-input-block">
        <input type="text" name="ronglian_paihao" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>



    <div class="layui-form-item">
      <label class="layui-form-label">Mg锭重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="Mg" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">Sn锭重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="Sn" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">Mg-20%Ca重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="Mg_20Ca" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">Al锭重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="Al" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">Mg-30%Ce重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="Mg_30Ce" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">Zn锭重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="Zn" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">PN5(g)</label>
      <div class="layui-input-block">
        <input type="number" name="PN5" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">AZ91D(g)</label>
      <div class="layui-input-block">
        <input type="number" name="AZ91D" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">Mg-20%Y重量(g)</label>
      <div class="layui-input-block">
        <input type="number" name="Mg_20_Y" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>


    <div class="layui-form-item">
      <label class="layui-form-label">合金锭重量</label>
      <div class="layui-input-block">
        <input type="number" name="hejinding_zhongliang" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>


    <div class="layui-form-item">
      <label class="layui-form-label">过热温度</label>
      <div class="layui-input-block">
        <input type="number" name="guore_wendu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">静置时间</label>
      <div class="layui-input-block">
        <input type="number" name="jingzhi_shijian" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>

    <div class="layui-form-item">
      <label class="layui-form-label">浇注温度</label>
      <div class="layui-input-block">
        <input type="number" name="jiaozhu_wendu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">模具温度</label>
      <div class="layui-input-block">
        <input type="number" name="muju_wendu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">熔炼坩埚</label>
      <div class="layui-input-block">
        <input type="text" name="ronglian_ganguo" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">是否烘炉</label>
      <div class="layui-input-block">
        <input type="text" name="shifou_honglu" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>


    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">备注</label>
      <div class="layui-input-block">
        <textarea name="ronglian_beizhu" placeholder="结果、问题或其它需要补充的信息" class="layui-textarea"></textarea>
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

        $.post('../action/add_smelt_action.php', JSON.stringify(data.field), function(res) {
          // 处理PHP脚本返回的结果
          if (res.code == '0') {
            alert("数据新增成功");
            window.location.href = "../index_smelt.php";
          }
        }, 'json');
        return false; // 阻止默认 form 跳转
      });




      // 日期
      laydate.render({
        elem: '#ronglian_riqi',
        value: today // 设置默认值为今天
          ,
        done: function(value, date, endDate) {
          // 当日期改变时，更新其他文本框的值
          value = value.substring(2); //去掉前两位
          value = value.replace(/-/g, ""); //f去掉“-”
          document.getElementById('ronglian_luhao').value = 'HA' + document.getElementById('ronglian_shebei').value + '-' + value + '-';
        }
      });


      form.on('select(ronglian_shebei)', function(data) {
        var select_value = data.value; // 获取下拉框选中的值
        var date_value = document.getElementById('ronglian_riqi').value; //获取日期值准备格式化
        date_value = date_value.substring(2); //去掉前两位
        date_value = date_value.replace(/-/g, ""); //f去掉“-”

        document.getElementById('ronglian_luhao').value = 'HA' + select_value + '-' + date_value + '-'; // 将值设置到文本框
      });



    });
    var ronglian_shebei = document.getElementById('ronglian_shebei').value;
    let date = new Date();
    let formattedDate = date.toISOString().slice(2, 10).replace(/-/g, '')

    document.getElementById('ronglian_luhao').value = 'HA01-' + formattedDate + '-';
  </script>
</body>

</html>