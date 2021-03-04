<div class="fieldholder-small<% if $HolderClass %> $HolderClass<% end_if %>" id="$HolderID.ATT">
<% if $Title %><label class="fieldholder-small-label<% if $LeftLabelClass %> $LeftLabelClass<% end_if %>" <% if $ID %>for="$ID"<% end_if %>>$Title</label><% end_if %>
	$Field
<% if $RightTitle %><label class="fieldholder-small-label<% if $RightLabelClass %> $RightLabelClass<% end_if %>" <% if $ID %>for="$ID"<% end_if %>>$RightTitle</label><% end_if %>
</div>
