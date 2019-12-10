<template>
  <div>
    <div class="margin-bottom-10" style="overflow:hidden;margin-bottom:10px;">
      <div class="btn-wrap">
        <Button type="primary" @click="newUser" icon="ios-add-circle-outline">新增</Button>
      </div>
      <div class="search-wrap"></div>
    </div>
    <Table :loading="loading" :columns="column" :data="data">
      <Page
        :total="pagination.total"
        size="small"
        show-total
        show-elevator
        :page-size="pagination.perPage"
        @on-change="changePage"
        slot="footer"
        style="margin-left:20px;"
      ></Page>
    </Table>

    <Drawer title="编辑" :mask-closable="false" :width="500" :closable="true" v-model="showEditor">
      <edit @saved="saved" :value="form"></edit>
    </Drawer>
  </div>
</template>

<script>
/* eslint-disable */
import axios from "@/libs/api.request";
import edit from "./food-edit";
export default {
  name: "",
  components: {
    edit
  },
  props: {
    type: {
      type: Number,
      default: 0
    }
  },
  data() {
    return {
      loading: false,
      showEditor: false,
      form: {},
      column: [
        {
          title: "菜品名称",
          key: "name"
        },
        {
          title: "描述",
          key: "introduce"
        },
        {
          title: "评分",
          key: "score"
        },
        {
          title: "样式图",
          key: "image"
        },
        {
          title: "操作",
          key: "action",
          align: "center",
          width: 200,
          render: (h, params) => {
            return h("div", [
              h(
                "a",
                {
                  style: {
                    marginRight: "5px"
                  },
                  on: {
                    click: () => {
                      this.handleEdit(params.row);
                    }
                  }
                },
                "编辑"
              ),
              h(
                "a",
                {
                  style: {
                    marginRight: "5px"
                  },
                  on: {
                    click: () => {
                      this.handleRemove(params.row);
                    }
                  }
                },
                "删除"
              )
            ]);
          }
        }
      ],
      data: [],
      pagination: {},
      page: 1
    };
  },
  methods: {
    newUser() {
      this.showEditor = true;
      this.form = {  };
    },
    saved() {
      this.showEditor = false;
      this.getData();
    },
    getData() {
      axios
        .request({
          method: "get",
          url: "api/food/food",
          params: {
            page:this.page
          }
        })
        .then(res => {
            console.log(res.data.data)
          this.data = res.data.data;
          this.pagination = res.data.pagination;
        });
    },
    handleRemove(row) {
      this.$Modal.confirm({
        title: "确认删除",
        content: "<p>确认删除该条记录</p>",
        onOk: () => {
          axios
            .request({
              method: "delete",
              url: "api/food/delete/" + row.id
            })
            .then(res => {
              this.getData();
            });
        },
        onCancel: () => {}
      });
    },
    handleEdit(data) {
      this.form = data;
      this.showEditor = true;
    },
    changePage(page) {
      this.page = page;
      this.getData();
    }
  },
  mounted() {
    this.getData();
  }
};
</script>

<style lang="" scoped>
</style>
