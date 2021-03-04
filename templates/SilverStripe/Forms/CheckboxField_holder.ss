<div id="$HolderID"<% if $HolderClass %> class="$HolderClass"<% end_if %>>
	$Field
<label<%if $RightLabelClass %> class="$RightLabelClass"<% end_if %> for="$ID">$Title<% if $RightTitle %> $RightTitle<% end_if %></label>
<% if $Message %><span class="<% if $HolderValidationMessageClass %>$HolderValidationMessageClass <% end_if %>$MessageType">$Message</span><% end_if %>
<% if $Description %><span<% if $HolderDescriptionClass %> class="$HolderDescriptionClass"<% end_if %>>$Description</span><% end_if %>
</div>
