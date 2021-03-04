<div<% if $Name %> id="$Name"<% end_if %><% if $HolderClass %> class="$HolderClass"<% end_if %>>
<% if $Title %><label<% if $LeftLabelClass %> class="$LeftLabelClass"<% end_if %>>$Title</label><% end_if %>

<div class="<% if $MiddleColumnClass %>$MiddleColumnClass<% end_if %> fieldgroup<% if $Zebra %> fieldgroup-$Zebra<% end_if %>">
		<% loop $FieldList %>
			<div class="fieldgroup-field $FirstLast $EvenOdd">
				$SmallFieldHolder
			</div>
		<% end_loop %>
	</div>
	<% if $RightTitle %><label<%if $RightLabelClass %> class="$RightLabelClass"<% end_if %>>$RightTitle</label><% end_if %>
<% if $Message %><span class="<% if $HolderValidationMessageClass %>$HolderValidationMessageClass <% end_if %>$MessageType">$Message</span><% end_if %>
	<% if $Description %><span<% if $HolderDescriptionClass %> class="$HolderDescriptionClass"<% end_if %>>$Description</span><% end_if %>
</div>
