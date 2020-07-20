# ebanana-like_or_dislike_demo
Use php+mysql+ajax to like/cancel like without refresh (使用php+mysql+ajax进行无刷新点赞/取消点赞)

Create TIME 2020.7.20

Author huangchuting

Format utf-8

记录每个赞的点赞用户，以及对赞的数量统计
首先判断用户是否点赞。根据是否点赞，载入不同的html，调用不同的方法
**已点赞**
如果已点赞，显示已点赞的html,按钮背景图片的更改,进行取消点赞操作
**未点赞**
如果未点赞，显示未点赞的html,按钮背景图片的更改,进行点赞操作

对于不同操作，对数据库进行增加或减少操作。同时对于不同用户的点赞，进行增加记录或删除记录操作。通过控制不同按钮的背景，来显示不同的效果。通过记录不同用户的用户id和赞的id之间的关系，进行不同点赞的限制。
