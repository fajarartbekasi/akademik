<div class="col-md-3">
    <ul class="list-group">
        @role('admin')
        <li class="list-group-item border-0 bg-gray-50">
            <a href="{{route('grades')}}" class="btn btn-toggle">
                Grades
            </a>
        </li>
        <li class="list-group-item border-0 bg-gray-50">
            <a href="{{route('schedules')}}" class="btn btn-toggle">
                Schedules
            </a>
        </li>
        <li class="list-group-item border-0 bg-gray-50 mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed mb-2" data-bs-toggle="collapse"
                data-bs-target="#orders-collapse" aria-expanded="false">
                Absensi
            </button>
            <div class="collapse" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="label-menu rounded text-pink-600">Staff</a></li>
                    <li><a href="#" class="label-menu rounded text-pink-600">Murid</a></li>
                    <li><a href="#" class="label-menu rounded text-pink-600">Guru</a></li>
                </ul>
            </div>
        </li>
        @endrole
        @role('guru')
            <li class="list-group-item border-0 bg-gray-50">
                <a href="{{route('schedules.teacher')}}" class="btn btn-toggle">
                    Schedules
                </a>
            </li>
        @endrole
    </ul>
</div>
