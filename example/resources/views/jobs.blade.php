<x-layout>
  <x-slot:heading>
    Job listings
  </x-slot:heading>
  <h1>hello from job listings page</h1>

  <ul>
    @foreach ($jobs as $job)
      <li>
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
          <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year
        </a>
      </li>
    @endforeach
  </ul>

</x-layout>