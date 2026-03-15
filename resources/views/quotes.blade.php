<x-layout title="Daily Quotes / Quotes">


	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-8 col-lg-6 mt-4 mb-5">
				<h1 class="mt-4 mb-3">Quotes</h1>
			</div>
		</div>
		<div class="row mb-5">
			@foreach($quotes as $quote)
				<div class="col-12 col-md-4 col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-body">

							<x-quote-card 
								{{-- Va scritto senza spazi
									quindi non :quote = "$quote" !!!
								--}}
								:quote="$quote"
							/>

						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>


</x-layout>