{include file="mheader.tpl"} 
<!-- panel-wrapper -->
<main id="panel-wrapper">
<!-- sidebar -->
<section id="afix" class="left-sidebar">
<div onclick="CoHeaderMenu('.left-sidebar')" class="close-menu float-right">
</div>
<div class="sidebar">
	<div class="header d-block d-md-none">
		<img src="styles/img/logo/logo.svg" height="30" width="100">
		<div class="title">
			 Dashboard
		</div>
	</div>
	<div class="user-info d-flex bw-flex-center">
		<svg class="avatar">
		<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 45.52 45.52" id="user2" width="100%" height="100%">
		<g clip-path="url(#a)">
		<path d="M22.83 21.36a6 6 0 1 1 6-6 6 6 0 0 1-6 6zm0-10.57a4.54 4.54 0 1 0 4.54 4.53 4.54 4.54 0 0 0-4.54-4.53z"></path>
		<path d="M22.76 45.52a22.76 22.76 0 1 1 22.76-22.76 22.79 22.79 0 0 1-22.76 22.76zm0-44A21.26 21.26 0 1 0 44 22.76 21.28 21.28 0 0 0 22.76 1.5z"></path>
		<path d="M28.43 37.07H17.71a4.56 4.56 0 0 1-3.86-7l2.8-4.43a7.59 7.59 0 0 1 12.84 0l2.8 4.43a4.56 4.56 0 0 1-3.86 7zM17.92 26.44l-2.8 4.43a3.06 3.06 0 0 0 2.59 4.7h10.72a3.06 3.06 0 0 0 2.57-4.7l-2.8-4.43a6.09 6.09 0 0 0-10.3 0z"></path>
		</g>
		</svg>
		</svg>
		<div class="info">
			<h4 class="welcome">hi, {$userinfo.username}</h4>
			<p class="email">
				 {$userinfo.email}
			</p>
		</div>
	</div>
	<div class="clearfix">
	</div>
	<div class="menu mt-4">
		<ul>
			<li>
			<a href="?a=account"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 14.4 15.17" id="dashboard" width="100%" height="100%">
			<g clip-path="url(#a)">
			<path d="M1 15.17a1 1 0 0 1-1-1V1a1 1 0 1 1 2 0v13.17a1 1 0 0 1-1 1zm6.2 0a1 1 0 0 1-1-1v-10a1 1 0 0 1 2 0v10a1 1 0 0 1-1 1zm6.2 0a1 1 0 0 1-1-1V7.76a1 1 0 1 1 2 0v6.41a1 1 0 0 1-1 1z"></path>
			</g>
			</svg>
			</svg>
			</span>
			<span class="title">Dashboard</span>
			</a>
			</li>
			<li>
			<a href="?a=deposit" class="active"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19.83 17.03" id="wallet" width="100%" height="100%">
			<g clip-path="url(#a)">
			<path d="M14.28 17H3.71A3.71 3.71 0 0 1 0 13.32V5.89a2.3 2.3 0 0 1 2.3-2.3h13.39A2.3 2.3 0 0 1 18 5.89v2.29h-2V5.89a.3.3 0 0 0-.3-.3H2.3a.3.3 0 0 0-.3.3v7.43A1.71 1.71 0 0 0 3.71 15h10.57A1.71 1.71 0 0 0 16 13.32v-1h2v1A3.71 3.71 0 0 1 14.28 17z"></path>
			<path d="M17 13.1h-3.46a2.86 2.86 0 1 1 0-5.72H17a2.86 2.86 0 1 1 0 5.72zm-3.46-3.72a.86.86 0 1 0 0 1.72H17a.86.86 0 1 0 0-1.72zM2 5.72H0V4a4 4 0 0 1 4-4h8a2 2 0 0 1 2 2v3.5h-2V2H4a2 2 0 0 0-2 2z"></path>
			</g>
			</svg>
			</svg>
			</span>
			<span class="title">Make Investment</span>
			</a>
			</li>
			<li>
			<a href="?a=deposit_list"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 18.98 17.69" id="deposit-list" width="100%" height="100%">
			<g clip-path="url(#a)">
			<path d="M14.37 17.69H4.6a4.61 4.61 0 0 1-4.6-4.6V2.2A2.2 2.2 0 0 1 2.2 0h14.57A2.2 2.2 0 0 1 19 2.2v10.89a4.61 4.61 0 0 1-4.63 4.6zM2.2 2a.2.2 0 0 0-.2.2v10.89a2.6 2.6 0 0 0 2.6 2.6h9.77a2.6 2.6 0 0 0 2.6-2.6V2.2a.2.2 0 0 0-.2-.2z"></path>
			<path d="M4.89 5.1h9.4v2h-9.4zm0 4.65h9.4v2h-9.4z"></path>
			</g>
			</svg>
			</svg>
			</span>
			<span class="title">Fund Management</span>
			</a>
			</li>
			<li>
			<a href="?a=withdraw"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 18.34 19.78" id="withdraw" width="100%" height="100%">
			<g clip-path="url(#a)">
			<path d="M14.48 14.47a1 1 0 0 1 0-2 1.85 1.85 0 0 0 1.85-1.85v-8.1a.52.52 0 0 0-.51-.52H2.52a.52.52 0 0 0-.52.52v8.1a1.85 1.85 0 0 0 1.85 1.85 1 1 0 0 1 0 2A3.86 3.86 0 0 1 0 10.62v-8.1A2.52 2.52 0 0 1 2.52 0h13.3a2.52 2.52 0 0 1 2.52 2.52v8.1a3.86 3.86 0 0 1-3.86 3.85z"></path>
			<path d="M.84 3.74h16.5v2H.84zm8.25 13.55a1 1 0 0 1-1-1V9.52a1 1 0 1 1 2 0v6.77a1 1 0 0 1-1 1z"></path>
			<path d="M9.09 19.78a1 1 0 0 1-.71-.31l-3-3.18a1.001 1.001 0 0 1 1.46-1.37l2.3 2.44 2.48-2.46A1 1 0 1 1 13 16.31l-3.21 3.18a1 1 0 0 1-.7.29z"></path>
			</g>
			</svg>
			</svg>
			</span>
			<span class="title">Withdraw</span>
			</a>
			</li>
			<li>
			<a href="?a=deposit_history"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 18.84 19.74" id="transaction" width="100%" height="100%">
			<g clip-path="url(#a)">
			<path d="M15.35 5.21H8.58a1 1 0 0 1 0-2h6.77a1 1 0 0 1 0 2z"></path>
			<path d="M14.65 8.21A1 1 0 0 1 14 6.49l2.44-2.3-2.5-2.49A1 1 0 1 1 15.36.3l3.18 3.21a1 1 0 0 1 0 1.43l-3.18 3a1 1 0 0 1-.71.27zm-4.39 8.53H3.49a1 1 0 0 1 0-2h6.77a1 1 0 1 1 0 2z"></path>
			<path d="M4.18 19.74a1 1 0 0 1-.69-.27l-3.18-3A1 1 0 0 1 .29 15l3.18-3.21a1 1 0 0 1 1.42 1.41l-2.46 2.51L4.87 18a1 1 0 0 1-.69 1.73zm5.35-6.59a3.08 3.08 0 1 1 3.08-3.08 3.08 3.08 0 0 1-3.08 3.08zm0-4.15a1.08 1.08 0 1 0 1.08 1.08A1.08 1.08 0 0 0 9.53 9z"></path>
			</g>
			</svg>
			</svg>
			</span>
			<span class="title">History</span>
			</a>
			</li>
			<li>
			<a href="?a=referals"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 20.52 17.53" id="referrals" width="100%" height="100%">
			<g clip-path="url(#a)">
			<path d="M7.49 14.41H4.6A4.61 4.61 0 0 1 0 9.81V8.12a4.61 4.61 0 0 1 4.6-4.6h2.89a1 1 0 0 1 1 1v8.89a1 1 0 0 1-1 1zM4.6 5.52A2.6 2.6 0 0 0 2 8.12v1.69a2.6 2.6 0 0 0 2.6 2.6h1.89V5.52z"></path>
			<path d="M18.31 17.52a2.2 2.2 0 0 1-.74-.13L7.2 14.21a1 1 0 0 1-.71-1V4.52a1 1 0 0 1 .69-.95L17.55.14a2.16 2.16 0 0 1 2 .24 2.2 2.2 0 0 1 1 1.82v13.12a2.2 2.2 0 0 1-2.2 2.2zm-9.83-5l9.69 3h.06a.2.2 0 0 0 .27-.19V2.2a.19.19 0 0 0-.07-.2.19.19 0 0 0-.19 0L8.49 5.24z"></path>
			</g>
			</svg>
			</svg>
			</span>
			<span class="title">Referrals</span>
			</a>
			</li>
			<li>
			<a href="?a=cust&amp;page=marketing_banners"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" id="marketing" viewbox="0 -14 512.00001 512" width="100%" height="100%"><path d="m136.964844 308.234375c4.78125-2.757813 6.417968-8.878906 3.660156-13.660156-2.761719-4.777344-8.878906-6.417969-13.660156-3.660157-4.78125 2.761719-6.421875 8.882813-3.660156 13.660157 2.757812 4.78125 8.878906 6.421875 13.660156 3.660156zm0 0"></path><path d="m95.984375 377.253906 50.359375 87.230469c10.867188 18.84375 35.3125 25.820313 54.644531 14.644531 19.128907-11.054687 25.703125-35.496094 14.636719-54.640625l-30-51.96875 25.980469-15c4.78125-2.765625 6.421875-8.878906 3.660156-13.660156l-13.003906-22.523437c1.550781-.300782 11.746093-2.300782 191.539062-37.570313 22.226563-1.207031 35.542969-25.515625 24.316407-44.949219l-33.234376-57.5625 21.238282-32.167968c2.085937-3.164063 2.210937-7.230469.316406-10.511719l-20-34.640625c-1.894531-3.28125-5.492188-5.203125-9.261719-4.980469l-38.472656 2.308594-36.894531-63.90625c-5.34375-9.257813-14.917969-14.863281-25.605469-14.996094-.128906-.003906-.253906-.003906-.382813-.003906-10.328124 0-19.703124 5.140625-25.257812 13.832031l-130.632812 166.414062-84.925782 49.03125c-33.402344 19.277344-44.972656 62.128907-25.621094 95.621094 17.679688 30.625 54.953126 42.671875 86.601563 30zm102.324219 57.238282c5.523437 9.554687 2.253906 21.78125-7.328125 27.316406-9.613281 5.558594-21.855469 2.144531-27.316407-7.320313l-50-86.613281 34.640626-20c57.867187 100.242188 49.074218 85.011719 50.003906 86.617188zm-22.683594-79.296876-10-17.320312 17.320312-10 10 17.320312zm196.582031-235.910156 13.820313 23.9375-12.324219 18.664063-23.820313-41.261719zm-104.917969-72.132812c2.683594-4.390625 6.941407-4.84375 8.667969-4.796875 1.707031.019531 5.960938.550781 8.527344 4.996093l116.3125 201.464844c3.789063 6.558594-.816406 14.804688-8.414063 14.992188-1.363281.03125-1.992187.277344-5.484374.929687l-123.035157-213.105469c2.582031-3.320312 2.914063-3.640624 3.425781-4.480468zm-16.734374 21.433594 115.597656 200.222656-174.460938 34.21875-53.046875-91.878906zm-223.851563 268.667968c-4.390625-7.597656-6.710937-16.222656-6.710937-24.949218 0-17.835938 9.585937-34.445313 25.011718-43.351563l77.941406-45 50 86.601563-77.941406 45.003906c-23.878906 13.78125-54.515625 5.570312-68.300781-18.304688zm0 0"></path><path d="m105.984375 314.574219c-2.761719-4.78125-8.878906-6.421875-13.660156-3.660157l-17.320313 10c-4.773437 2.757813-10.902344 1.113282-13.660156-3.660156-2.761719-4.78125-8.878906-6.421875-13.660156-3.660156s-6.421875 8.878906-3.660156 13.660156c8.230468 14.257813 26.589843 19.285156 40.980468 10.980469l17.320313-10c4.78125-2.761719 6.421875-8.875 3.660156-13.660156zm0 0"></path><path d="m497.136719 43.746094-55.722657 31.007812c-4.824218 2.6875-6.5625 8.777344-3.875 13.601563 2.679688 4.820312 8.765626 6.566406 13.601563 3.875l55.71875-31.007813c4.828125-2.6875 6.5625-8.777344 3.875-13.601562-2.683594-4.828125-8.773437-6.5625-13.597656-3.875zm0 0"></path><path d="m491.292969 147.316406-38.636719-10.351562c-5.335938-1.429688-10.820312 1.734375-12.25 7.070312-1.429688 5.335938 1.738281 10.816406 7.074219 12.246094l38.640625 10.351562c5.367187 1.441407 10.824218-1.773437 12.246094-7.070312 1.429687-5.335938-1.738282-10.820312-7.074219-12.246094zm0 0"></path><path d="m394.199219 7.414062-10.363281 38.640626c-1.429688 5.335937 1.734374 10.816406 7.070312 12.25 5.332031 1.425781 10.816406-1.730469 12.25-7.070313l10.359375-38.640625c1.429687-5.335938-1.734375-10.820312-7.070313-12.25-5.332031-1.429688-10.816406 1.734375-12.246093 7.070312zm0 0"></path></svg>
			</svg>
			</span>
			<span class="title">Marketing Banners</span>
			</a>
			</li>
			<li>
			<a href="?a=security"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="lock2" viewbox="0 0 512 512" width="100%" height="100%">
			<path d="M400,188h-36.037v-82.23c0-58.322-48.449-105.77-108-105.77c-59.551,0-108,47.448-108,105.77V188H112 c-33.084,0-60,26.916-60,60v204c0,33.084,26.916,60,60,60h288c33.084,0,60-26.916,60-60V248C460,214.916,433.084,188,400,188z M187.963,105.77c0-36.266,30.505-65.77,68-65.77s68,29.504,68,65.77V188h-136V105.77z M420,452c0,11.028-8.972,20-20,20H112 c-11.028,0-20-8.972-20-20V248c0-11.028,8.972-20,20-20h288c11.028,0,20,8.972,20,20V452z"></path>
			<path d="M256,286c-20.435,0-37,16.565-37,37c0,13.048,6.76,24.51,16.963,31.098V398c0,11.045,8.954,20,20,20 c11.045,0,20-8.955,20-20v-43.855C286.207,347.565,293,336.08,293,323C293,302.565,276.435,286,256,286z"></path>
			</svg>
			</svg>
			</span>
			<span class="title">Two Factor Security</span>
			</a>
			</li>
			<li>
			<a href="?a=edit_account"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 18.86 18.86" id="setting" width="100%" height="100%">
			<g clip-path="url(#a)">
			<path d="M10.38 2a.56.56 0 0 1 .37.46c.11.48.24 1 .35 1.45a.21.21 0 0 0 .15.17l.71.3h.1a.22.22 0 0 0 .11 0l1.16-.69a.59.59 0 0 1 .3-.1.5.5 0 0 1 .35.18l1.12 1.1a.46.46 0 0 1 .08.66l-.69 1.14a.2.2 0 0 0 0 .21q.16.36.3.72a.2.2 0 0 0 .16.14l1.52.37a.46.46 0 0 1 .4.51v1.59a.46.46 0 0 1-.41.52l-1.52.38a.26.26 0 0 0-.15.13c-.11.23-.2.47-.3.7a.2.2 0 0 0 0 .21l.67 1.12a.46.46 0 0 1-.08.67L14 15a.53.53 0 0 1-.37.19.62.62 0 0 1-.32-.11l-1.09-.66a.22.22 0 0 0-.12 0h-.12l-.73.31a.2.2 0 0 0-.14.16c-.12.51-.25 1-.37 1.52a.46.46 0 0 1-.51.4h-1.6a.46.46 0 0 1-.52-.4c-.12-.51-.25-1-.38-1.52a.27.27 0 0 0-.13-.15l-.73-.31h-.1a.21.21 0 0 0-.11 0l-1.09.66a.61.61 0 0 1-.3.1.51.51 0 0 1-.36-.18L3.8 14a.47.47 0 0 1-.08-.67l.65-1.08a.2.2 0 0 0 0-.21c-.11-.24-.21-.49-.31-.73a.21.21 0 0 0-.17-.15l-1.46-.36a.56.56 0 0 1-.43-.42V8.47a.56.56 0 0 1 .44-.37l1.46-.36a.21.21 0 0 0 .17-.15c.08-.21.16-.41.25-.62a.2.2 0 0 0 0-.21l-.75-1.23a.47.47 0 0 1 .09-.67l1.1-1.1a.52.52 0 0 1 .36-.19.64.64 0 0 1 .32.11l1.18.71a.21.21 0 0 0 .12 0h.11l.74-.32a.22.22 0 0 0 .16-.18c.12-.49.24-1 .36-1.46A.56.56 0 0 1 8.47 2h1.91m.34-2h-2.6L7.8.12a2.54 2.54 0 0 0-1.6 1.7 2.42 2.42 0 0 0-2.86.52l-1.1 1.1a2.45 2.45 0 0 0-.55 2.8A2.53 2.53 0 0 0 .12 7.8L0 8.12v2.61l.12.33a2.54 2.54 0 0 0 1.69 1.59 2.44 2.44 0 0 0 .58 2.72l1.11 1.11a2.43 2.43 0 0 0 2.71.58 2.43 2.43 0 0 0 2.42 1.8h1.6A2.42 2.42 0 0 0 12.65 17a2.43 2.43 0 0 0 2.76-.57l1.1-1.1a2.41 2.41 0 0 0 .57-2.73 2.43 2.43 0 0 0 1.77-2.41v-1.6a2.42 2.42 0 0 0-1.79-2.41 2.43 2.43 0 0 0-.55-2.76l-1.12-1.09a2.42 2.42 0 0 0-2.75-.55A2.54 2.54 0 0 0 11 .11z"></path>
			<path d="M9.43 8.21a1.22 1.22 0 0 1 0 2.44 1.22 1.22 0 0 1 0-2.44m0-2a3.22 3.22 0 1 0 3.22 3.23 3.22 3.22 0 0 0-3.22-3.23z"></path>
			</g>
			</svg>
			</svg>
			</span>
			<span class="title">Settings</span>
			</a>
			</li>
			<li>
			<a href="logout.html"><span class="icon">
			<svg>
			<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 15.8 18.2" id="logout" width="100%" height="100%">
			<path d="M7.9 18.2c-4.4 0-7.9-3.5-7.9-7.9 0-2.6 1.3-5 3.4-6.5.5-.3 1.1-.2 1.4.2.3.5.2 1.1-.2 1.4C3 6.5 2 8.3 2 10.3c0 3.2 2.6 5.9 5.9 5.9 3.2 0 5.9-2.6 5.9-5.9 0-1.9-.9-3.6-2.4-4.7-.4-.3-.5-1-.2-1.4.3-.4 1-.5 1.4-.2 2 1.5 3.2 3.9 3.2 6.3 0 4.3-3.6 7.9-7.9 7.9z"></path>
			<path d="M7.9 8.7c-.6 0-1-.4-1-1V1c0-.6.4-1 1-1s1 .4 1 1v6.7c0 .5-.5 1-1 1z"></path>
			</svg>
			</svg>
			</span>
			<span class="title">Logout</span>
			</a>
			</li>
		</ul>
	</div>
	<!--
          <div class="fill-profile mt-4 d-none d-md-block">
          <h4 class="title">Please Complete Your Profile </h4>
          <p>
          Your bitcoin address is undefined and you can’t make withdrawal while it’s undefined!
        </p>
      </div>
    -->
</div>
</section>
<!-- end sidebar -->
<!-- main -->
<section class="main">
<h1 class="page-title">
<svg>
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19.83 17.03" id="wallet" width="100%" height="100%">
<g clip-path="url(#a)">
<path d="M14.28 17H3.71A3.71 3.71 0 0 1 0 13.32V5.89a2.3 2.3 0 0 1 2.3-2.3h13.39A2.3 2.3 0 0 1 18 5.89v2.29h-2V5.89a.3.3 0 0 0-.3-.3H2.3a.3.3 0 0 0-.3.3v7.43A1.71 1.71 0 0 0 3.71 15h10.57A1.71 1.71 0 0 0 16 13.32v-1h2v1A3.71 3.71 0 0 1 14.28 17z"></path>
<path d="M17 13.1h-3.46a2.86 2.86 0 1 1 0-5.72H17a2.86 2.86 0 1 1 0 5.72zm-3.46-3.72a.86.86 0 1 0 0 1.72H17a.86.86 0 1 0 0-1.72zM2 5.72H0V4a4 4 0 0 1 4-4h8a2 2 0 0 1 2 2v3.5h-2V2H4a2 2 0 0 0-2 2z"></path>
</g>
</svg>
</svg>
<span>Make a new</span> Investment </h1>
<!-- investment -->
<section id="investment" class="card _bg_b mb-5">
<form method=post name="spendform">
	<input type="hidden" name="form_id" value="15513914198613"><input type="hidden" name="form_token" value="1ceb3960ea7198eaea5dbb9b47f6c803">
	<input type=hidden name=a value=deposit>
	<div class="calc">
		<!-- end live price -->
		<div class="body">
			<h3 class="title" style="color:#fff"><span class="num">1.</span> Choose a Payment</h3>
		</div>
		<!-- lice price -->
		<section id="liveprice">
		<div class="row justify-content-center ">
			<div class="radio-container-price">
				<input name="price" type="radio" class="invest-coin-check">
				<div class="box invest pm ">
					<div class="top-box">
						<button class="close-box" type="button">&times;</button>
						<svg class="background"><svg xmlns="http://www.w3.org/2000/svg" id="logo-18" viewbox="0 0 1119.6 1000" width="100%" height="100%">
						<path class="st0" d="M544.6,18c-268.4,0-486,217.6-486,486s217.6,486,486,486s486-217.6,486-486S813,18,544.6,18z M428.2,468.2 c-9.2,17.3-23.7,31.6-43.3,42.7c-14,8-27,13.5-38.8,16.5s-26.4,4.5-43.8,4.5h-42.2v9.6c0,36.3,0.4,64.6,1.1,84.9 c0.7,20.3,2,32.9,3.9,37.7l43.3,1.8V688H174.2v-20.9l35-1.8c1.1-3.2,2-15.2,2.8-36.2c0.7-20.9,1.1-49.7,1.1-86.4v-79.5 c0-42.3-0.5-75-1.4-98.4c-0.9-23.3-2.5-37.6-4.7-42.8l-32.7-1.8v-20.9h158.1c37.3,0,65,8.5,82.9,25.4c18,17,26.9,43.2,26.9,78.7 C442.1,429.2,437.4,450.8,428.2,468.2z M807.6,688v-20.9l36.6-1.8c1.1-2.8,1.8-14.2,1.9-34.4c0.2-20.1-0.1-49.5-0.8-88.2l-4.4-193.2 L706.1,682.6l-12.7,5.4h-1.1L554.7,350l-3.9,166.9c-0.8,38.7-1,69.6-0.8,92.7c0.2,23.1,0.8,41.1,2,53.8l40.5,3V688H482.6v-20.9 l34.4-3.6c1.8-16.4,3.4-38.3,4.7-65.8s2.3-55.2,3-83.1l5.6-189l-39.4-5.4v-20.9h97.6l1.1,0.6c1.8,7.6,6.1,20.7,12.7,39.5 C609,358,617.9,381,629,408.1l79.9,200.4c5.9-13.2,12.6-28.5,20-46.1c7.4-17.5,15.3-36.7,23.8-57.4l83.7-205.1l1.1-0.6h88.2v20.9 L888,322c-0.4,3.2-0.6,10-0.6,20.3c0,27.1,1.1,79.1,3.3,156.1c2.6,105.7,5.2,161.3,7.8,166.9l32.1,1.8V688H807.6z M367.8,342.9 c-17-12.8-46.2-19.1-87.6-19.1H263c-0.7,6-1.4,18.2-1.9,36.8c-0.6,18.5-0.8,40.6-0.8,66.1v70.6c19.2,2.8,32.8,4.6,40.8,5.4 c7.9,0.8,15.1,1.2,21.3,1.2c10.4,0,19.8-0.9,28.3-2.7c8.5-1.8,15.3-4.5,20.5-8.1c8.9-6,14.8-14.2,17.7-24.5 c3-10.4,4.4-27.1,4.4-50.3v-6C393.3,378.8,384.8,355.6,367.8,342.9z"></path>
						</svg></svg>
						<div class="icon">
							<svg xmlns="http://www.w3.org/2000/svg" id="logo-18" viewbox="0 0 1119.6 1000" width="100%" height="100%">
							<path class="st0" d="M544.6,18c-268.4,0-486,217.6-486,486s217.6,486,486,486s486-217.6,486-486S813,18,544.6,18z M428.2,468.2 c-9.2,17.3-23.7,31.6-43.3,42.7c-14,8-27,13.5-38.8,16.5s-26.4,4.5-43.8,4.5h-42.2v9.6c0,36.3,0.4,64.6,1.1,84.9 c0.7,20.3,2,32.9,3.9,37.7l43.3,1.8V688H174.2v-20.9l35-1.8c1.1-3.2,2-15.2,2.8-36.2c0.7-20.9,1.1-49.7,1.1-86.4v-79.5 c0-42.3-0.5-75-1.4-98.4c-0.9-23.3-2.5-37.6-4.7-42.8l-32.7-1.8v-20.9h158.1c37.3,0,65,8.5,82.9,25.4c18,17,26.9,43.2,26.9,78.7 C442.1,429.2,437.4,450.8,428.2,468.2z M807.6,688v-20.9l36.6-1.8c1.1-2.8,1.8-14.2,1.9-34.4c0.2-20.1-0.1-49.5-0.8-88.2l-4.4-193.2 L706.1,682.6l-12.7,5.4h-1.1L554.7,350l-3.9,166.9c-0.8,38.7-1,69.6-0.8,92.7c0.2,23.1,0.8,41.1,2,53.8l40.5,3V688H482.6v-20.9 l34.4-3.6c1.8-16.4,3.4-38.3,4.7-65.8s2.3-55.2,3-83.1l5.6-189l-39.4-5.4v-20.9h97.6l1.1,0.6c1.8,7.6,6.1,20.7,12.7,39.5 C609,358,617.9,381,629,408.1l79.9,200.4c5.9-13.2,12.6-28.5,20-46.1c7.4-17.5,15.3-36.7,23.8-57.4l83.7-205.1l1.1-0.6h88.2v20.9 L888,322c-0.4,3.2-0.6,10-0.6,20.3c0,27.1,1.1,79.1,3.3,156.1c2.6,105.7,5.2,161.3,7.8,166.9l32.1,1.8V688H807.6z M367.8,342.9 c-17-12.8-46.2-19.1-87.6-19.1H263c-0.7,6-1.4,18.2-1.9,36.8c-0.6,18.5-0.8,40.6-0.8,66.1v70.6c19.2,2.8,32.8,4.6,40.8,5.4 c7.9,0.8,15.1,1.2,21.3,1.2c10.4,0,19.8-0.9,28.3-2.7c8.5-1.8,15.3-4.5,20.5-8.1c8.9-6,14.8-14.2,17.7-24.5 c3-10.4,4.4-27.1,4.4-50.3v-6C393.3,378.8,384.8,355.6,367.8,342.9z"></path>
							</svg>
						</div>
						<div class="amount">
							<div class="name">
								PerfectMoney
							</div>
							<span class="balance">0.00</span><span>USD</span>
						</div>
					</div>
					<div class="rs">
						<div class="text-center show_txt">
							Select a payment type:
						</div>
						<div class="input-container left" style="width:100%;">
							<input name=type value="process_18" type="radio" class="direct-check">
							<label class="radio-container-2" style="border-radius:3px;">
							Directly </label>
						</div>
					</div>
				</div>
			</div>
			<div class="radio-container-price">
				<input name="price" type="radio" class="invest-coin-check">
				<div class="box invest payeer ">
					<div class="top-box">
						<button class="close-box" type="button">&times;</button>
						<svg class="background"><svg xmlns="http://www.w3.org/2000/svg" id="logo-43" viewbox="0 0 1119.6 1000" width="100%" height="100%">
						<path class="st0" d="M615.9,325.6c12.1,13.3,18.2,29.5,18.2,48.7s-6.1,35.4-18.2,48.5c-12.1,13.2-27.2,19.8-45.4,19.8H486V305.7 h84.5C588.6,305.7,603.8,312.4,615.9,325.6z"></path>
						<path class="st0" d="M540.9,39c-227.5,0-412,184.5-412,412s184.5,412,412,412s412-184.5,412-412S768.4,39,540.9,39z M681.9,489 c-28.6,30.9-64.7,46.4-108.5,46.4H486V693h-91V213h178.5c43.5,0,79.6,15.5,108.3,46.4c28.7,30.9,43,69.2,43,114.8 C724.8,419.8,710.5,458.1,681.9,489z"></path>
						</svg></svg>
						<div class="icon">
							<svg><svg xmlns="http://www.w3.org/2000/svg" id="logo-43" viewbox="0 0 1119.6 1000" width="100%" height="100%">
							<path class="st0" d="M615.9,325.6c12.1,13.3,18.2,29.5,18.2,48.7s-6.1,35.4-18.2,48.5c-12.1,13.2-27.2,19.8-45.4,19.8H486V305.7 h84.5C588.6,305.7,603.8,312.4,615.9,325.6z"></path>
							<path class="st0" d="M540.9,39c-227.5,0-412,184.5-412,412s184.5,412,412,412s412-184.5,412-412S768.4,39,540.9,39z M681.9,489 c-28.6,30.9-64.7,46.4-108.5,46.4H486V693h-91V213h178.5c43.5,0,79.6,15.5,108.3,46.4c28.7,30.9,43,69.2,43,114.8 C724.8,419.8,710.5,458.1,681.9,489z"></path>
							</svg></svg>
						</div>
						<div class="amount">
							<div class="name">
								Payeer
							</div>
							<span class="balance">0.00</span><span>USD</span>
						</div>
					</div>
					<div class="rs">
						<div class="text-center show_txt">
							Select a payment type:
						</div>
						<div class="input-container left" style="width:100%;">
							<input name=type value="process_43" type="radio" class="direct-check">
							<label class="radio-container-2" style="border-radius:3px;">
							Directly </label>
						</div>
					</div>
				</div>
			</div>
			<div class="radio-container-price">
				<input name="price" type="radio" class="invest-coin-check">
				<div class="box invest btc ">
					<div class="top-box">
						<button class="close-box" type="button">&times;</button>
						<svg class="background"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30.85 30.85" id="logo-48" width="100%" height="100%">
						<g fill-rule="evenodd">
						<path d="M14.08 15.61l-.93 3.73c1.15.28 4.69 1.42 5.21-.68s-3.14-2.77-4.28-3.05z"></path>
						<path d="M19.15.46a15.42 15.42 0 1 0 11.23 18.7A15.42 15.42 0 0 0 19.15.46zm3.07 12.77a2.7 2.7 0 0 1-2.16 2.49 3 3 0 0 1 1.56 4.11c-.91 2.61-3.08 2.83-6 2.28l-.7 2.81-1.69-.42.69-2.77-1.35-.35-.69 2.78-1.69-.42.7-2.81-1.21-.31-2.2-.55.84-1.94s1.25.33 1.23.31a.62.62 0 0 0 .78-.4l1.9-7.62a.9.9 0 0 0-.79-1l-1.23-.31.45-1.81 2.34.59 1.08.25.69-2.78 1.69.42-.66 2.74 1.36.32.67-2.71 1.69.42-.69 2.78c2.17.74 3.7 1.85 3.39 3.9z"></path>
						<path d="M15.34 10.52l-.84 3.38c1 .24 3.9 1.21 4.38-.7s-2.58-2.44-3.54-2.68z"></path>
						</g>
						</svg></svg>
						<div class="icon">
							<svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30.85 30.85" id="logo-48" width="100%" height="100%">
							<g fill-rule="evenodd">
							<path d="M14.08 15.61l-.93 3.73c1.15.28 4.69 1.42 5.21-.68s-3.14-2.77-4.28-3.05z"></path>
							<path d="M19.15.46a15.42 15.42 0 1 0 11.23 18.7A15.42 15.42 0 0 0 19.15.46zm3.07 12.77a2.7 2.7 0 0 1-2.16 2.49 3 3 0 0 1 1.56 4.11c-.91 2.61-3.08 2.83-6 2.28l-.7 2.81-1.69-.42.69-2.77-1.35-.35-.69 2.78-1.69-.42.7-2.81-1.21-.31-2.2-.55.84-1.94s1.25.33 1.23.31a.62.62 0 0 0 .78-.4l1.9-7.62a.9.9 0 0 0-.79-1l-1.23-.31.45-1.81 2.34.59 1.08.25.69-2.78 1.69.42-.66 2.74 1.36.32.67-2.71 1.69.42-.69 2.78c2.17.74 3.7 1.85 3.39 3.9z"></path>
							<path d="M15.34 10.52l-.84 3.38c1 .24 3.9 1.21 4.38-.7s-2.58-2.44-3.54-2.68z"></path>
							</g>
							</svg></svg>
						</div>
						<div class="amount">
							<div class="name">
								Bitcoin
							</div>
							<span class="balance">0.00</span><span>USD</span>
						</div>
					</div>
					<div class="rs">
						<div class="text-center show_txt">
							Select a payment type:
						</div>
						<div class="input-container left" style="width:100%;">
							<input name=type value="process_48" type="radio" class="direct-check">
							<label class="radio-container-2" style="border-radius:3px;">
							Directly </label>
						</div>
					</div>
				</div>
			</div>
			<div class="radio-container-price">
				<input name="price" type="radio" class="invest-coin-check">
				<div class="box invest ltc ">
					<div class="top-box">
						<button class="close-box" type="button">&times;</button>
						<svg class="background"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30.93 30.93" id="logo-68" width="100%" height="100%">
						<path d="M12.77 6.91L10.35 16l-1.93.75-.7 2.58 2-.66L8.37 24h14l.86-3.44H14.7l1.1-4.14 2.29-1 .66-2.53-2.25.76 1.76-6.74h-5.5zM15.47 0A15.47 15.47 0 1 1 0 15.47 15.47 15.47 0 0 1 15.47 0zm0 0" fill-rule="evenodd"></path>
						</svg></svg>
						<div class="icon">
							<svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 30.93 30.93" id="logo-68" width="100%" height="100%">
							<path d="M12.77 6.91L10.35 16l-1.93.75-.7 2.58 2-.66L8.37 24h14l.86-3.44H14.7l1.1-4.14 2.29-1 .66-2.53-2.25.76 1.76-6.74h-5.5zM15.47 0A15.47 15.47 0 1 1 0 15.47 15.47 15.47 0 0 1 15.47 0zm0 0" fill-rule="evenodd"></path>
							</svg></svg>
						</div>
						<div class="amount">
							<div class="name">
								Litecoin
							</div>
							<span class="balance">0.00</span><span>USD</span>
						</div>
					</div>
					<div class="rs">
						<div class="text-center show_txt">
							Select a payment type:
						</div>
						<div class="input-container left" style="width:100%;">
							<input name=type value="process_68" type="radio" class="direct-check">
							<label class="radio-container-2" style="border-radius:3px;">
							Directly </label>
						</div>
					</div>
				</div>
			</div>
			<div class="radio-container-price">
				<input name="price" type="radio" class="invest-coin-check">
				<div class="box invest doge ">
					<div class="top-box">
						<button class="close-box" type="button">&times;</button>
						<svg class="background"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 31.1 31.1" id="logo-79" width="100%" height="100%">
						<path d="M15.55 0A15.55 15.55 0 1 0 31.1 15.55 15.55 15.55 0 0 0 15.55 0zm.61 24h-5.63v-7.54h-2v-1.83h2V7.14h4.83c1.14 0 8.72-.24 8.72 8.55S16.16 24 16.16 24zm-.24-13.7H13.7v4.38h3.5v1.83h-3.5v4.38H16c.6 0 4.92.07 4.91-5.1s-4.19-5.5-5-5.5z" fill-rule="evenodd"></path>
						</svg></svg>
						<div class="icon">
							<svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 31.1 31.1" id="logo-79" width="100%" height="100%">
							<path d="M15.55 0A15.55 15.55 0 1 0 31.1 15.55 15.55 15.55 0 0 0 15.55 0zm.61 24h-5.63v-7.54h-2v-1.83h2V7.14h4.83c1.14 0 8.72-.24 8.72 8.55S16.16 24 16.16 24zm-.24-13.7H13.7v4.38h3.5v1.83h-3.5v4.38H16c.6 0 4.92.07 4.91-5.1s-4.19-5.5-5-5.5z" fill-rule="evenodd"></path>
							</svg></svg>
						</div>
						<div class="amount">
							<div class="name">
								Dogecoin
							</div>
							<span class="balance">0.00</span><span>USD</span>
						</div>
					</div>
					<div class="rs">
						<div class="text-center show_txt">
							Select a payment type:
						</div>
						<div class="input-container left" style="width:100%;">
							<input name=type value="process_79" type="radio" class="direct-check">
							<label class="radio-container-2" style="border-radius:3px;">
							Directly </label>
						</div>
					</div>
				</div>
			</div>
			<div class="radio-container-price">
				<input name="price" type="radio" class="invest-coin-check">
				<div class="box invest eth ">
					<div class="top-box">
						<button class="close-box" type="button">&times;</button>
						<svg class="background"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19.09 31.05" id="logo-69" width="100%" height="100%">
						<path d="M9.54 31.05l9.55-13.4-9.55 5.63L0 17.65l9.54 13.4z"></path>
						<path d="M9.54 21.48l9.55-5.65-9.55-4.33L0 15.83l9.54 5.65z"></path>
						<path d="M9.54 11.5l9.55 4.33L9.54 0 0 15.83l9.54-4.33z"></path>
						</svg></svg>
						<div class="icon">
							<svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 19.09 31.05" id="logo-69" width="100%" height="100%">
							<path d="M9.54 31.05l9.55-13.4-9.55 5.63L0 17.65l9.54 13.4z"></path>
							<path d="M9.54 21.48l9.55-5.65-9.55-4.33L0 15.83l9.54 5.65z"></path>
							<path d="M9.54 11.5l9.55 4.33L9.54 0 0 15.83l9.54-4.33z"></path>
							</svg></svg>
						</div>
						<div class="amount">
							<div class="name">
								Ethereum
							</div>
							<span class="balance">0.00</span><span>USD</span>
						</div>
					</div>
					<div class="rs">
						<div class="text-center show_txt">
							Select a payment type:
						</div>
						<div class="input-container left" style="width:100%;">
							<input name=type value="process_69" type="radio" class="direct-check">
							<label class="radio-container-2" style="border-radius:3px;">
							Directly </label>
						</div>
					</div>
				</div>
			</div>
			<div class="radio-container-price">
				<input name="price" type="radio" class="invest-coin-check">
				<div class="box invest bch ">
					<div class="top-box">
						<button class="close-box" type="button">&times;</button>
						<svg class="background"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 31 19.15" id="logo-77" width="100%" height="100%">
						<g>
						<path d="M22.21 19.15a11.69 11.69 0 0 0 0-19.15H31v19.15zM3.82 9.57a11.67 11.67 0 0 0 5 9.57H0V0h8.8a11.67 11.67 0 0 0-4.98 9.57zm12.72-1.45h.12a.88.88 0 0 0 .06-.54.88.88 0 0 0-.31-.45h-.21a1.53 1.53 0 0 0-1-.08L14 6.91 14.54 9l1.13-.29a1.53 1.53 0 0 0 .87-.59zM18 10.44a.91.91 0 0 0-.36-.48h-.25a1.93 1.93 0 0 0-1.22-.06l-1.37.1.58 2.25 1.34-.35a1.93 1.93 0 0 0 1-.64h.15a.9.9 0 0 0 .08-.59z"></path>
						<path d="M15.5 0a9.57 9.57 0 1 0 9.57 9.57A9.57 9.57 0 0 0 15.5 0zm4.42 11.25h-.22a3 3 0 0 1-1.73 1.19l-.42.11.45 2.16-1 .26-.44-1.71-.81.21.44 1.71-1 .26-.44-1.7-2.1.54v-1.29l.74-.19a.35.35 0 0 0 .25-.43L12.35 7.8a.52.52 0 0 0-.64-.38l-.85.22-.28-1.09 2.1-.55-.44-1.7 1-.26.44 1.7.81-.21-.44-1.7 1-.26.44 1.71h.17a2.62 2.62 0 0 1 1.85.18h.36a1.74 1.74 0 0 1 .57.85v.08a1.74 1.74 0 0 1-.09 1h-.2a2.44 2.44 0 0 1-.23.29 2.73 2.73 0 0 1 .87.28h.4a2 2 0 0 1 .64 1v.09a2 2 0 0 1 .09 2.2z"></path>
						</g>
						</svg></svg>
						<div class="icon">
							<svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 31 19.15" id="logo-77" width="100%" height="100%">
							<g>
							<path d="M22.21 19.15a11.69 11.69 0 0 0 0-19.15H31v19.15zM3.82 9.57a11.67 11.67 0 0 0 5 9.57H0V0h8.8a11.67 11.67 0 0 0-4.98 9.57zm12.72-1.45h.12a.88.88 0 0 0 .06-.54.88.88 0 0 0-.31-.45h-.21a1.53 1.53 0 0 0-1-.08L14 6.91 14.54 9l1.13-.29a1.53 1.53 0 0 0 .87-.59zM18 10.44a.91.91 0 0 0-.36-.48h-.25a1.93 1.93 0 0 0-1.22-.06l-1.37.1.58 2.25 1.34-.35a1.93 1.93 0 0 0 1-.64h.15a.9.9 0 0 0 .08-.59z"></path>
							<path d="M15.5 0a9.57 9.57 0 1 0 9.57 9.57A9.57 9.57 0 0 0 15.5 0zm4.42 11.25h-.22a3 3 0 0 1-1.73 1.19l-.42.11.45 2.16-1 .26-.44-1.71-.81.21.44 1.71-1 .26-.44-1.7-2.1.54v-1.29l.74-.19a.35.35 0 0 0 .25-.43L12.35 7.8a.52.52 0 0 0-.64-.38l-.85.22-.28-1.09 2.1-.55-.44-1.7 1-.26.44 1.7.81-.21-.44-1.7 1-.26.44 1.71h.17a2.62 2.62 0 0 1 1.85.18h.36a1.74 1.74 0 0 1 .57.85v.08a1.74 1.74 0 0 1-.09 1h-.2a2.44 2.44 0 0 1-.23.29 2.73 2.73 0 0 1 .87.28h.4a2 2 0 0 1 .64 1v.09a2 2 0 0 1 .09 2.2z"></path>
							</g>
							</svg></svg>
						</div>
						<div class="amount">
							<div class="name">
								Bitcoin Cash
							</div>
							<span class="balance">0.00</span><span>USD</span>
						</div>
					</div>
					<div class="rs">
						<div class="text-center show_txt">
							Select a payment type:
						</div>
						<div class="input-container left" style="width:100%;">
							<input name=type value="process_77" type="radio" class="direct-check">
							<label class="radio-container-2" style="border-radius:3px;">
							Directly </label>
						</div>
					</div>
				</div>
			</div>
			<div class="radio-container-price">
				<input name="price" type="radio" class="invest-coin-check">
				<div class="box invest dash ">
					<div class="top-box">
						<button class="close-box" type="button">&times;</button>
						<svg class="background"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 28.02 16.57" id="logo-71" width="100%" height="100%">
						<g fill-rule="evenodd">
						<path d="M5.94 0h19.25a2.83 2.83 0 0 1 2.69 3.72l-2.79 8.51a6.31 6.31 0 0 1-6 4.34H.51l1.34-4.09h17.3L21.9 4.1H4.59z"></path>
						<path d="M1.21 6.42L0 10.15h10.22l1.21-3.73H1.21z"></path>
						</g>
						</svg></svg>
						<div class="icon">
							<svg><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 28.02 16.57" id="logo-71" width="100%" height="100%">
							<g fill-rule="evenodd">
							<path d="M5.94 0h19.25a2.83 2.83 0 0 1 2.69 3.72l-2.79 8.51a6.31 6.31 0 0 1-6 4.34H.51l1.34-4.09h17.3L21.9 4.1H4.59z"></path>
							<path d="M1.21 6.42L0 10.15h10.22l1.21-3.73H1.21z"></path>
							</g>
							</svg></svg>
						</div>
						<div class="amount">
							<div class="name">
								Dash
							</div>
							<span class="balance">0.00</span><span>USD</span>
						</div>
					</div>
					<div class="rs">
						<div class="text-center show_txt">
							Select a payment type:
						</div>
						<div class="input-container left" style="width:100%;">
							<input name=type value="process_71" type="radio" class="direct-check">
							<label class="radio-container-2" style="border-radius:3px;">
							Directly </label>
						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- end live price -->
		<div class="body">
			<div class="inputs mt-4">
				<div class="row">
					<div class="col-md-4">
						<label style="text-align: left; color:#fff"><span class="num">2.</span> Enter Investment Amount:</label>
					</div>
					<div class="col-md-8">
						<div class="input-box">
							<div class="text">
								USD
							</div>
							<input type="text" id="txtAmount" class="form-control" name="amount" value="100"/>
						</div>
					</div>
				</div>
			</div>
			<div class="justify-content-center plans ">
				<div class="float-left main">
					<div class="radio-container">
						<input class="planRadio" id="plan1" name="h_id" type="radio" value='1' checked>
						<div class="plan ">
							<div class="box d-flex justify-content-between bw-flex-center">
								<div class="name">
									Starter
								</div>
								<div class="col-md-6">
									<div class="item a">
										<div class="profit">
											 0.15 <small>%</small>
										</div>
										<div class="description">
											<span class="bold">HOURLY</span> PROFIT
										</div>
									</div>
								</div>
								<div class="col-md-6" style="padding-right:0">
									<div class="item">
										<p>
											<span class="percent">Lifetime</span>
											Min: $10<br>
											 Max: $999.99
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="float-left main">
					<div class="radio-container">
						<input class="planRadio" id="plan2" name="h_id" type="radio" value='1'>
						<div class="plan ">
							<div class="box d-flex justify-content-between bw-flex-center">
								<div class="name">
									Standard
								</div>
								<div class="col-md-6">
									<div class="item a">
										<div class="profit">
											 0.17 <small>%</small>
										</div>
										<div class="description">
											<span class="bold">HOURLY</span> PROFIT
										</div>
									</div>
								</div>
								<div class="col-md-6" style="padding-right:0">
									<div class="item">
										<p>
											<span class="percent">Lifetime</span>
											Min: $1000<br>
											 Max: $4999,99
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="float-left main">
					<div class="radio-container">
						<input class="planRadio" id="plan3" name="h_id" type="radio" value='1'>
						<div class="plan ">
							<div class="box d-flex justify-content-between bw-flex-center">
								<div class="name">
									Ultimate
								</div>
								<div class="col-md-6">
									<div class="item a">
										<div class="profit">
											 0.20 <small>%</small>
										</div>
										<div class="description">
											<span class="bold">HOURLY</span> PROFIT
										</div>
									</div>
								</div>
								<div class="col-md-6" style="padding-right:0">
									<div class="item">
										<p>
											<span class="percent">Lifetime</span>
											Min: $5000
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<svg class="bottom" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 293 25.5">
		<g id="Layer_2" data-name="Layer 2">
		<g id="Layer_1-2" data-name="Layer 1">
		<path d="M292.5,0c0,13.81-65.37,25-146,25S.5,13.81.5,0" stroke-miterlimit="10"/>
		</g>
		</g>
		</svg>
	</div>
	<div class="calculator-info mb-5">
		<ul>
			<li>
			<div class="title">
				Hourly Profit
			</div>
			<div class="amount">
				<span id="hourlyProfit">0.00</span><small>USD</small>
			</div>
			</li>
			<li>
			<div class="title">
				Daily Profit
			</div>
			<div class="amount">
				<span id="dailyProfit">0.00</span><small>USD</small>
			</div>
			</li>
			<li>
			<div class="title">
				Weekly Profit
			</div>
			<div class="amount">
				<span id="weeklyProfit">0.00</span><small>USD</small>
			</div>
			</li>
			<li>
			<div class="title">
				Monthly Profit
			</div>
			<div class="amount">
				<span id="monthlyProfit">0.00</span><small>USD</small>
			</div>
			</li>
		</ul>
		<div class="container mt-5 text-center">
			<button type=submit class="btn btn-lg btn-p-h btn-bw">Make Investment</button>
		</div>
	</div>
</form>
</section>
<!-- end investment -->
<script language=javascript>
        for (i = 0; i<document.spendform.type.length; i++) {
            if ((document.spendform.type[i].value.match(/^process_/))) {
                document.spendform.type[i].checked = true;
                break;
            }
        }
    </script>
{include file="mfooter.tpl"}