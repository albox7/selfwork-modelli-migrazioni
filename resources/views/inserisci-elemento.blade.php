<x-layout title="Daily Quotes / Inserisci elemento">

	
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6 mt-4 mb-5">
				<h1 class="mt-4 mb-3">Add a new quote</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6">
				<form action="{{route('quote.store')}}" method="POST">
					@csrf
					<div class="mb-3">
						<label for="qMsg" class="form-label">Quote</label>
						<textarea name="citazione" class="form-control" id="qMsg" cols="30" rows="4"></textarea>
					</div>

					<div class="mb-5">
						<label for="quoteAuthor" class="form-label">Author</label>
						<input name="autore" type="text" class="form-control" id="quoteAuthor" aria-describedby="quote-description">
					</div>
						
					<div>
						<button type="submit" class="btn btn-primary">Insert quote</button>
				</form>
			</div>
		</div>
	</div>

</x-layout>