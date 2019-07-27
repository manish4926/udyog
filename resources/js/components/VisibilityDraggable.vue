<template>
   <div class="visibility-drag">
    <div class="col-md-6">
        <h4>All Videos</h4>
        
        <draggable class="list-group min-height" :list="videosNew" :options="{animation:200, group:'visbility'}" :element="'ul'" @add="onAdd($event, true)">

            <li class="list-group-item" v-for="(video, index) in videosNew" :key="video.id" :data-id="video.id">
            
                <div><strong>{{ video.title }}</strong></div>
                <div>{{ video.description }}</div>
                <div>{{ video.duration }}</div>
            </li> 
        </draggable>
    </div>
    <div class="col-md-6">
         <h4>Live Videos</h4>

          <draggable class="list-group min-height" :list="livevideosNew" :options="{animation:200, group:'visbility'}" :element="'ul'" @add="onAdd($event, false)" @change="update">

            <li class="list-group-item" v-for="(livevideo, index) in livevideosNew" :key="livevideo.id" :data-id="livevideo.id">
                    <div><strong>{{ livevideo.name }}</strong></div>
                    <div>{{ livevideo.description }}</div>
                    <div>{{ livevideo.duration }}</div>
                   <!--  <div>
                        <form :action="'/admin/livevideos/' + video.id" method="POST">
                                <input type="hidden" name="_token" :value="csrf">
                                <input type="hidden" name="_method" value="delete">

                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div> -->
                </li>   
            </draggable>
    </div>
   </div>
</template>

<script>
    import draggable from 'vuedraggable'
    export default{
        components: {
            draggable
        },


        props: ['videos','livevideos'], 

        data(){
            return{
                videosNew: this.videos,
                livevideosNew: this.livevideos
            }
        },

        methods: {
            onAdd(event, visible) {
            /*console.log(event.item);*/
            let id = event.item.getAttribute('data-id');
            axios.patch('/admin/videos/liveVideos/' + id, {
                visible: visible
            }).then((response) => {
                //success message
            })
           },

           update() {

                this.livevideosNew.map((livevideo ,index) => {
                    livevideo.order = index + 1;
                })

                axios.post('/admin/videos/updateAllLive', {
                    //console.log(video.id);
                    livevideos: this.livevideosNew

                }).then((response) =>{

                })
            }
                
        },
        mounted() {
            console.log('Component mounted.')
        }
    };
</script>
