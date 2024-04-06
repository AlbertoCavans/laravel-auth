@extends('layouts.app')

@section('content')
  <section>
    <div class="container">
        <h1>List Projects</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Project Slug</th>
                    <th>Description</th>
                    <th>Buttons</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                   <tr>
                       <td>{{ $project["name_project"] }}</td>
                       <td>{{ $project["slug"] }}</td>
                       <td>{{ $project->redDescription(50) }}</td>
                       <th></th>
                   </tr>
                @empty
                   <tr>
                       <td colspan="100%">
                           <span>Nessun risultato trovato</span>
                       </td>
                   </tr>
                @endforelse
            </tbody>
        </table>

        {{ $projects->links('pagination::bootstrap-5') }}
    </div>
  </section>
@endsection

