<!DOCTYPE html>

<html>

<head>

    <title>Edit utilisateurs</title>

</head>

<body>

<h1>Edit utilisateurs</h1>

    {{--Entrer son rôle Etudiant, Membre du BDE ou personnel du CESI--}}

    <div class="row">
        <div class="clo-md-12">
            <div>
                <select  name="service_type" id="service_type" class="selectpicker" data-style="select-with-transitin" title="Select Class" data-size="7">
                    @foreach ($class_array as $data)
                        <option value="{{$data->id}}"> {{$data->intitule}}</option>
                    @endforeach;
                </select>
            </div>
        </div>
    </div>

</body>

</html>