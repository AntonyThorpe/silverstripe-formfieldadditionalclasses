<div id="$HolderID"<% if $HolderClass %> class="$HolderClass"<% end_if %>>
	<% if $Title %><label<% if $LeftLabelClass %> class="$LeftLabelClass"<% end_if %> for="$ID">$Title</label><% end_if %>
<div<% if $MiddleColumnClass %> class="$MiddleColumnClass"<% end_if %>>
		$Field
	</div>
	<% if $RightTitle %><label<%if $RightLabelClass %> class="$RightLabelClass"<% end_if %> for="$ID">$RightTitle</label><% end_if %>
	<% if $Message %><span class="<% if $HolderValidationMessageClass %>$HolderValidationMessageClass <% end_if %>$MessageType">$Message</span><% end_if %>
	<% if $Description %><span<% if $HolderDescriptionClass %> class="$HolderDescriptionClass"<% end_if %>>$Description</span><% end_if %>
</div>
