
<?php

      $qry="select `id`, `sku`, `imei`, `sno`, `qty`, `name`, `tax`, `dp`, `mrp`, `vat_bill_id`, `stock_type` FROM `products` where `sold` != '1' ";
      $db = new Db();
      $res = $db -> select(2,$qry);
?>


<div class="smarttable">
<table id="flip-scroll" class="sortable">
<thead>
<tr>
<th> id </th>
<th> imei </th>
<th> sno </th>
<th> qty </th>
<th> name </th>
<th> tax </th>
<th> dp </th>
<th> mrp </th>
<th> vat id </th>
<th> type </th>
</tr>
</thead>
<tbody>
<?php
      foreach ($res[1] as $key ) {
        print "<tr>";
        print "<td> $key[id] </td>";
        print "<td> $key[imei] </td>";
        print "<td> $key[sno] </td>";
        print "<td> $key[qty] </td>";
        print "<td> $key[name] </td>";
        print "<td> $key[tax] </td>";
        print "<td> $key[dp] </td>";
        print "<td> $key[mrp] </td>";
        print "<td> $key[vat_bill_id] </td>";
        print "<td> $key[stock_type] </td>";
        print"</tr>";
        }
?>
</tbody>
</table>
</div>
