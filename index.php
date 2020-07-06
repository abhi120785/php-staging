<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Swap with Preview test</title>
<h1>Swap with Preview Test Page</h1>
<table>
<tbody>
<tr>
<th>Server Variable</th>
<th>Value</th>
</tr>
<tr>
<td>Process ID:</td>
<td><%= System.Diagnostics.Process.GetCurrentProcess().Id%></td>
</tr>
<tr>
<td>SlotName:</td>
<td><%= Environment.GetEnvironmentVariable("SlotName") %></td>
</tr>
<tr>
<td>ConnectionString:</td>
<td><%= Environment.GetEnvironmentVariable("SQLAZURECONNSTR_ConnectionString") %></td>
</tr>
</tbody>
</table>

