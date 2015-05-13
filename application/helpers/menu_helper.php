<?php
function select_menu($data, $level = 0, $text = "--")
{
$html = "";
foreach ($data as $k => $vl) {
if ($vl->level == $level) {
echo '<option value="' . $vl->id . '">' . $text . $vl->title_lang1 . '</option>';
unset($data[$k]);
$id = $vl->id;
select_menu($data, $id, $text . "--");
}
}
}

function load_menu($data,$link_edit,$link_del, $level = 0, $text = "--")
{
foreach ($data as $k => $vl) {
if ($vl->level == $level) {
echo '</tr>';
echo '<td>' . $text . $vl->title_lang1 . '</td>';
echo '<td>' . $vl->alias . '</td>';
echo '<td><span> <a href="/'. $link_edit.'.html?id=' . $vl->id . '">Edit</a></span> || <span> <a  style="color:red" href="/'. $link_del.'.html?id=' . $vl->id . '">Delete</a></span></td>';
echo '</tr>';
$id = $vl->id;
load_menu($data, $link_edit,$link_del,$id, $text . "--");
}
}
}
