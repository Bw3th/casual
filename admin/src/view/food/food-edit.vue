<template>
  <div>
    <Form :label-width="80" :rules="formRule" :model="form">
      <FormItem label="菜品名称" prop="name">
        <i-input v-model="form.name"></i-input>
      </FormItem>
      <FormItem label="描述" prop="introduce">
        <i-input v-model="form.introduce"></i-input>
      </FormItem>
      <FormItem label="评分" prop="score">
        <i-input v-model="form.score"></i-input>
      </FormItem>
      <FormItem label="附件" prop="image">
            <Upload
            style="width:300px;"
            ref="uploadFile"
            multiple
            :on-success = "uploadsuccee"
            type="drag"
            action="http://122.51.233.226//api/file/upload">
            <div style="padding: 20px 0">
                <Icon type="ios-cloud-upload" size="52" style="color: #3399ff"></Icon>
                <p>Click or drag files here to upload</p>
            </div>
        </Upload>
      </FormItem>
      <FormItem>
        <Button type="primary" @click="save()">保存</Button>
      </FormItem>
    </Form>
  </div>
</template>

<script>
/* eslint-disable */
import axios from "@/libs/api.request";
export default {
  tag: "",
  components: {
  },
  props: {
    value: {
      type: Object,
      default: () => {
        return {};
      }
    }
  },
  data() {
    return {
      form: {  },
      fileId:[],
      formRule: {
        tag: [{ required: true, message: "分类名称", trigger: "blur" }],
      }
    };
  },
  watch: {
    value(data) {
      this.form = Object.assign({}, data);
    }
    
  },
  mounted() {
    if (this.value) {
      this.form = Object.assign({}, this.value);
    }
  },
  methods: {
    save() {
      let method = "POST";
      let url = "api/food/food";
      if (this.form.id) {
        method = "PUT";
        url += "/" + this.form.id;
      }
      axios
        .request({
          url: url,
          method: method,
          data: this.form
        })
        .then(res => {
          if (res.data.successful) {
            this.$emit("saved");
          } else {
            this.$Notice.warning({
              title: "提示",
              desc: res.data.error_msg
            });
          }
        });
    },
    uploadsuccee(res, file,fileList) {
        this.fileId.push(res);
        this.form.image = this.fileId;
    },
  }
};
</script>
<style scoped>
.info{
    color: #fff;
}
</style>