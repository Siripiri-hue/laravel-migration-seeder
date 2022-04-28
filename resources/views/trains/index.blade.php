@extends('layouts.standard')

@section('mainContent')
<main>
    <table>
        <caption>Departures</caption>
        <th>Train code</th>
        <th>Departure station</th>
        <th>Arrival station</th>
        <th>Departure time</th>
        <th>Arrival time</th>
        <th>Company</th>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->train_code }}</td>
                <td>{{ $item->departure_station }}</td>
                <td>{{ $item->arrival_station }}</td>
                <td>{{ $item->departure_time }}</td>
                <td>{{ $item->arrival_time }}</td>
                <td>{{ $item->company }}</td>
            </tr>
        @endforeach
    </table>
</main>
@endsection