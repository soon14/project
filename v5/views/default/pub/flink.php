<p>
    {st:flink action="query" typeid="$typeid"}
    {loop $data $row}
    <a href="{$row['url']}" target="_blank">{$row['title']}</a>
    {/loop}
    {/st}
</p>
