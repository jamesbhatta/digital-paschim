<div class="my-3"></div>
<footer class="page-footer font-small special-color-dark">
	<div class="footer-copyright d-flex p-4">
		<div class="">
			© {{ now()->format('Y') }} Copyright <a href="{{ url('/') }}">{{ config('app.name')}} </a>
		</div>
		<div class="ml-auto">
			{{-- Developer <a href="http://manojbhatta.com.np">Manoj Bhatta</a> --}}
			Powered By <a href="http://mohrain.com">Mohrain WebSoft Pvt. Ltd.</a>
		</div>
	</div>
</footer>