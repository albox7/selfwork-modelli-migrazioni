<x-layout title="Daily Quotes / Inserisci elemento">

	
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6 mt-4 mb-5">
				<h1 class="mt-4 mb-3">Inserisci</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6">
				<form>	
					<div class="mb-3">
						<label for="quoteMessage" class="form-label">Citazione</label>
						<textarea name="quoteMessage" class="form-control" id="qMsg" cols="30" rows="4"></textarea>
					</div>

					<div class="mb-5">
						<label for="quoteAuthor" class="form-label">Autore</label>
						<input type="text" class="form-control" id="quoteAuthor" aria-describedby="quote-description">
					</div>
						
					<div>
						<button type="submit" class="btn btn-primary">Inserisci</button>
				</form>
			</div>
		</div>
	</div>

</x-layout>