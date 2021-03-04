<$Tag class="CompositeField<% if $HolderClass %> $HolderClass<% end_if %><% if $ColumnCount %> multicolumn<% end_if %>" id="$HolderID">
	<% if $Tag == 'fieldset' && $Legend %>
		<legend>$Legend</legend>
	<% end_if %>
	$Field
</$Tag>
