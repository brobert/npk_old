<!-- section header -->
<div class="section-header mb15">
	<h5 class="semibold">Obecności</h5>
</div>
<!--/ section header -->
<!-- tab -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#incoming-{{$tabId}}" data-toggle="tab">Odebrane</a></li>
	<li><a href="#outgoing-{{$tabId}}" data-toggle="tab">Wysłane</a></li>
</ul>
<!--/ tab -->
<!-- tab content -->
<div class="tab-content panel">
	<div class="tab-pane active np" id="incoming-{{$tabId}}">
		<!-- Media list -->
		<div class="media-list">
			<a href="javascript:void(0);" class="media border-dotted"> <span
				class="pull-left"> <img
					src="../image/background/400x400/background4.jpg"
					class="media-object img-rounded" alt="">
			</span> <span class="media-body"> <span class="media-text">Lorem
						ipsum dolor sit amet, consectetur adipisicing elit.</span> <!-- meta icon -->
					<span class="media-meta"><i class="ico-heart4"></i> 10 Likes</span>
					<!--/ meta icon -->
			</span>
			</a> <a href="javascript:void(0);" class="media border-dotted"> <span
				class="pull-left"> <img
					src="../image/background/400x400/background8.jpg"
					class="media-object img-rounded" alt="">
			</span> <span class="media-body"> <span class="media-text">Mauris eu
						turpis. Nulla aliquet. Proin velit consectetur adipisicing.</span>
					<!-- meta icon --> <span class="media-meta"><i class="ico-heart4"></i>
						101 Likes</span> <!--/ meta icon -->
			</span>
			</a> <a href="javascript:void(0);" class="media border-dotted"> <span
				class="pull-left"> <img
					src="../image/background/400x400/background11.jpg"
					class="media-object img-rounded" alt="">
			</span> <span class="media-body"> <span class="media-text">Lorem
						ipsum dolor sit amet, consectetur adipisicing elit.</span> <!-- meta icon -->
					<span class="media-meta"><i class="ico-heart4"></i> 30 Likes</span>
					<!--/ meta icon -->
			</span>
			</a>
		</div>
		<!--/ Message list -->
	</div>
	<div class="tab-pane np" id="outgoing-{{$tabId}}">
		<!-- Message list -->
		<div class="media-list">
			<a href="javascript:void(0);" class="media border-dotted"> <span
				class="pull-left"> <img src="../image/avatar/avatar6.jpg"
					class="media-object img-circle" alt="">
			</span> <span class="media-body"> <span class="media-heading">Arthur
						Abbott</span> <span class="media-text ellipsis nm">Lorem ipsum
						dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</span>
					<!-- meta icon --> <span class="media-meta">2m</span> <!--/ meta icon -->
			</span>
			</a> <a href="javascript:void(0);" class="media border-dotted read">
				<span class="pull-left"> <img src="../image/avatar/avatar1.jpg"
					class="media-object img-circle" alt="">
			</span> <span class="media-body"> <span class="media-heading">Martina
						Poole</span> <span class="media-text ellipsis nm">Lorem ipsum
						dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</span>
					<!-- meta icon --> <span class="media-meta">20m</span> <!--/ meta icon -->
			</span>
			</a> <a href="page-message-rich.html" class="media border-dotted"> <span
				class="pull-left"> <img src="../image/avatar/avatar2.jpg"
					class="media-object img-circle" alt="">
			</span> <span class="media-body"> <span class="media-heading">Elvis
						Christensen</span> <span class="media-text ellipsis nm">Duis aute
						irure dolor in reprehenderit in voluptate velit esse.</span> <!-- meta icon -->
					<span class="media-meta">5h</span> <!--/ meta icon -->
			</span>
			</a>
		</div>
		<!--/ Message list -->
	</div>
</div>
<!--/ tab content -->
