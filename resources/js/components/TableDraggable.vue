<template>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Order</th>
                <th width="300px">Action</th>
                <th>Sort</th>
            </tr>
        </thead>
        <draggable :list="videoNew" :options="{animation:300, handle:'.my-handle'}" :element="'tbody'" @change="update">
            <!-- <draggable v-for="videoNew" animation:300, handle=".my-handle" element="'tbody'"> -->
            <!-- @foreach($videos as $video) -->
            <tr v-for="(video, index) in videoNew">
                <td>{{video.id}}</td>
                <td>{{video.name}}</td>
                <td>{{video.description}}</td>
                <td>{{video.order}}</td>
                <td>
                    <a :href="'/admin/videos/' + video.id" class="btn btn-info">Show</a>
                    <a :href="'/admin/videos/' + video.id +'/edit/'" class="btn btn-primary">Edit</a>
                    <form :action="'/admin/videos/' + video.id" method="POST">
                                <!-- {{ csrf_field() }}
                                {!! method_field('delete') !!} -->
                                <input type="hidden" name="_token" :value="csrf">
                                <input type="hidden" name="_method" value="delete">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                </td>
                <!-- <td><i class="fas fa-arrows my-handle"></i></td> -->
                <td><i class="fas fa-arrows-alt my-handle"></i></td>

            </tr>
            <!-- @endforeach -->
        </draggable>
    </table>
</template>

<script>
    import draggable from 'vuedraggable'
    export default{
        components: {
            draggable
        },


        props: ['videos'], 

        data(){
            return{

                videoNew: this.videos,
                csrf: document.head.querySelector('meta[name="csrf-token"]').content
            }
        },

        methods: {
            update() {

                this.videoNew.map((video ,index) => {
                    video.order = index + 1;
                })

                axios.post('/admin/videos/updateall', {
                    //console.log(video.id);
                    videos: this.videoNew

                }).then((response) =>{

                })
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    };
</script>
