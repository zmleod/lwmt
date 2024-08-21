<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>时间线</title>
  <link rel="stylesheet" href="" media="all">

</head>
<?php
require_once "./dbconfig_project.php";
$project_id=$_GET['project_id'];
$query_project = "SELECT * FROM project_list WHERE project_id = '$project_id'"; //课题表查询
$sql_project = mysql_query($query_project);
$get_row_project = mysql_fetch_array($sql_project);
$project_id = $get_row_project['project_id'];
$project_name = $get_row_project['project_name'];
$project_date_start = $get_row_project['date_start'];

?>

<body>
  <style>
    
    .timeline {
      list-style: none;
      padding: 20px 0 20px;
      position: relative;
    }

    .timeline:before {
      top: 0;
      bottom: 0;
      position: absolute;
      content: " ";
      width: 3px;
      background-color: #eeeeee;
      left: 50%;
      margin-left: -1.5px;
    }

    .timeline>li {
      margin-bottom: 20px;
      position: relative;
    }

    .timeline>li:before,
    .timeline>li:after {
      content: " ";
      display: table;
    }

    .timeline>li:after {
      clear: both;
    }

    .timeline>li:before,
    .timeline>li:after {
      content: " ";
      display: table;
    }

    .timeline>li:after {
      clear: both;
    }

    .timeline>li>.timeline-panel {
      width: 46%;
      float: left;
      border: 1px solid #d4d4d4;
      border-radius: 2px;
      padding: 5px;
      position: relative;
      -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
      box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }

    .timeline>li>.timeline-panel:before {
      position: absolute;
      top: 26px;
      right: -15px;
      display: inline-block;
      border-top: 15px solid transparent;
      border-left: 15px solid #ccc;
      border-right: 0 solid #ccc;
      border-bottom: 15px solid transparent;
      content: " ";
    }

    .timeline>li>.timeline-panel:after {
      position: absolute;
      top: 27px;
      right: -14px;
      display: inline-block;
      border-top: 14px solid transparent;
      border-left: 14px solid #fff;
      border-right: 0 solid #fff;
      border-bottom: 14px solid transparent;
      content: " ";
    }

    .timeline>li>.timeline-badge {
      color: #fff;
      width: 20px;
      height: 20px;
      line-height: 50px;
      font-size: 1.4em;
      text-align: center;
      position: absolute;
      top: 16px;
      left: 50%;
      margin-left: -10px;
      background-color: #999999;
      z-index: 100;
      border-top-right-radius: 50%;
      border-top-left-radius: 50%;
      border-bottom-right-radius: 50%;
      border-bottom-left-radius: 50%;
    }

    .timeline>li.timeline-inverted>.timeline-panel {
      float: right;
    }

    .timeline>li.timeline-inverted>.timeline-panel:before {
      border-left-width: 0;
      border-right-width: 15px;
      left: -15px;
      right: auto;
    }

    .timeline>li.timeline-inverted>.timeline-panel:after {
      border-left-width: 0;
      border-right-width: 14px;
      left: -14px;
      right: auto;
    }

    .timeline-badge.primary {
      background-color: #2e6da4 !important;
    }

    .timeline-badge.success {
      background-color: #3f903f !important;
    }

    .timeline-badge.warning {
      background-color: #f0ad4e !important;
    }

    .timeline-badge.danger {
      background-color: #d9534f !important;
    }

    .timeline-badge.info {
      background-color: #5bc0de !important;
    }

    .timeline-title {
      margin-top: 0;
      color: inherit;
    }

    .timeline-body>p,
    .timeline-body>ul {
      margin-bottom: 0;
    }

    .timeline-body>p+p {
      margin-top: 5px;
    }
  </style>
  <div class="container">
    <div>增加：
      <a href="./operation/add_progress.php?project_id=<?php echo $project_id;?>">进度</a>
      <a href="./operation/add_plan.php?project_id=<?php echo $project_id;?>">计划</a>
      <a href="./operation/add_sub_project.php?project_id=<?php echo $project_id;?>">子课题</a>

     </div>


    <div class="page-header">
      <h1 id="timeline"><?php echo $project_name; ?></h1>
    </div>
    <ul class="timeline">
      <?php
      $query_progress = "SELECT * FROM progress_list WHERE project_id = '$project_id' ORDER BY id DESC"; //进度表查询
      $sql_progress = mysql_query($query_progress);
      while ($get_row_progress = mysql_fetch_array($sql_progress)) {
        if ($get_row_progress['sub_project_id']) {
          $li_class_string = "<li>";
          $icon_string = "<div class=\"timeline-badge info\"></div>";
          echo $li_class_string;
          echo $icon_string;
          echo '<div class="timeline-panel">';
          echo '<div class="timeline-heading">';
          echo '<h3 class="timeline-title"><small class="text-muted">' . $get_row_progress['progress_date'] . '</small>&nbsp;&nbsp;子课题：' . $get_row_progress['progress_name'] . '</h3>';
          echo '</div>';
          echo '<div class="timeline-body">';
          echo '<a href="project.php?project_id=' . $get_row_progress['sub_project_id'] . '">课题链接</a>';
          echo '</div>';

          echo '</div>';
          echo '</li>';
        } else {
          if ($get_row_progress['is_plan']) {
            $li_class_string = "<li class=\"timeline-inverted\">";
            $icon_string = "<div class=\"timeline-badge warning\"></div>";
            echo $li_class_string;
            echo $icon_string;
            echo '<div class="timeline-panel">';
            echo '<div class="timeline-heading">';
            echo '<h3 class="timeline-title"><small class="text-muted">' . $get_row_progress['plan_start_date'] . '</small>&nbsp;&nbsp;计划：' . $get_row_progress['progress_name'] . '</h3>';
            echo '</div>';
            echo '<div class="timeline-body">';
            echo '<p>' . $get_row_progress['progress_content'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
          } else {
            $li_class_string = "<li>";
            $icon_string = "<div class=\"timeline-badge success\"></div>";
            echo $li_class_string;
            echo $icon_string;
            echo '<div class="timeline-panel">';
            echo '<div class="timeline-heading">';
            echo '<h3 class="timeline-title"><small class="text-muted">' . $get_row_progress['progress_date'] . '</small>&nbsp;&nbsp;汇报：' . $get_row_progress['progress_name'] . '</h3>';
            echo '</div>';
            echo '<div class="timeline-body">';
            echo '<p>' . $get_row_progress['progress_content'] . '</p>';
            echo '</div>';
            echo '<ul class="dropdown-menu" role="menu">';
            $progress_id = $get_row_progress['progress_id'];
            $query_file = "SELECT * FROM file_list WHERE progress_id = '$progress_id' ORDER BY id"; //附件查询
            $sql_file = mysql_query($query_file);
            while ($get_row_file = mysql_fetch_array($sql_file)) {
              echo '<li><a target="_blank" href=' . $get_row_file['file_dir'] . '>' . $get_row_file['file_name'] . '</a></li>';
            }
            echo '增加：<a href="./operation/add_file.php?progress_id='.$progress_id.'&project_id='.$project_id.'">附件</a>';
            echo '</ul>';
            echo '</div>';
            echo '</li>';
          }
        }
      }
      ?>
      <li>
        <div class="timeline-badge danger"></div>
      </li>
    </ul>
    <div style=text-align:center;>
      <h3><?php echo $project_date_start; ?></h3>
    </div>
  </div>
</body>

</html>