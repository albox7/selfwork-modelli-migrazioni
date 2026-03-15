<x-layout title="Daily Quotes / Inserisci elemento">

	
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6 mt-4 mb-5">
				<h1 class="mt-4 mb-3">Add a new quote</h1>
			</div>
		</div>


		{{-- Success message --}}
		@if (session('message'))
			<div class="row">
				<div class="col-12 col-md-8 col-lg-6">
					<div class="alert alert-success">
						{{ session('message') }}
					</div>
				</div>
			</div>
		@endif


		{{-- Validation messages --}}
		@if ($errors->any())
			<div class="row">
				<div class="col-12 col-md-8 col-lg-6">
					<div class="alert alert-danger">
						<ul class="error-list">
							@foreach ($errors->all() as $error)
								<li>{!! $error !!}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		@endif


		<div class="row">
			<div class="col-12 col-md-8 col-lg-6">
				
				<form action="{{route('quote.store')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="mb-3">
						<label for="qMsg" class="form-label">Quote</label>
						<textarea name="citazione" class="form-control" id="qMsg" cols="30" rows="4">{{old('citazione')}}</textarea>
					</div>
					<div class="mb-3">
						<label for="quoteAuthor" class="form-label">Author</label>
						<input name="autore" value="{{old('autore')}}" type="text" class="form-control" id="quoteAuthor" aria-describedby="quote-description">
					</div>
					<div class="mb-5">
						<label for="imgAuthor" class="form-label">Author image</label>
						<input name="img" type="file" class="form-control" id="imgAuthor" aria-describedby="img-author">
					</div>
					<div>
						<button type="submit" class="btn btn-primary">Insert quote</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</x-layout>