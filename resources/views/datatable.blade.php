@forelse ($files as $file)
<tr>
    <td>{{ $file->original_name }}</td>
    <td class="text-center">
        <a href="{{ route('download.unduh', $file) }}" class="btn btn-sm btn-primary" data-1="downloadFile">Download</a>
    </td>
</tr>
@empty
<tr>
    <td colspan="2" class="text-muted text-center" data-1="fileNotFound">File Not Found</td>
</tr>
@endforelse