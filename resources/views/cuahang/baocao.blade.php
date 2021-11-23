
<style>
    @font-face {
        font-family:SVN-Times New Roman ;
        src: url('SVN-Times New Roman.ttf');
    }
</style>
<div>
    <h1 style="text-align: center;">Báo cáo</h1>
    <ul>
        <li><p>Name Book Store : {{ $store->name }}</p></li>
        <li><p>Address: {{ $store->address }}</p></li>
        <li><p>Image<img src="{{ $store->image }}" alt="" ></p></li>
        <li><p>Email : {{ $store->name }}</p></li>
        <li><p>Area : {{ $store->area->name }}</p></li>
    </ul>
</div>