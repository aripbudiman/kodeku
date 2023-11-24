<div class="w-full xl:max-w-5xl mx-auto my-10">
    <div class="flex justify-between">
        <h1 class="text-3xl font-bold font-righteous">My Article</h1>
        <a href="{{ route('myarticle.create') }}" class="btn bg-base-300">Create</a>
    </div>
    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Favorite Color</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i < 10; $i++) <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Quality Control Specialist</td>
                    <td>Blue</td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>
