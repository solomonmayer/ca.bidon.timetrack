<div id="crm-timetrack-{$timetrack_header_cssid}" class="crm-accordion-wrapper">
  <div class="crm-accordion-header">{$timetrack_header_title}</div>
  <div class="crm-accordion-body">
    <table>
      <thead>
        {foreach from=$timetrack_headers item=header key=k}
          <th class="timetrack-header-{$k}">{$header}</th>
        {/foreach}
      </thead>
      <tbody>
        {foreach from=$timetrack_rows item=row name=rowloop}
          <tr class="{cycle values="odd,even"}">
            {foreach from=$timetrack_headers item=foo key=k}
              <td>{$row.$k}</td>
            {/foreach}
          </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>
