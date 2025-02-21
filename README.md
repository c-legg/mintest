## MinTest —— 一个基于 PHP 和 Python 的 OJ

这是我新开的一个项目，还没有很多必要的功能，主要就是要实现一个类洛谷/Codeforces/UOJ 的 OJ，在洛谷讨论区倒闭前已立项，在洛谷讨论区倒闭后移至 GitHub，只要是做备份和镜像。

### 项目结构

```yaml
- main
  - p # problem files
    # your problems here
  style.css # the style
  account.php # you can view your home page in this page
  contest.php # you can view the contests in this page
  discuss.php # discuss and discussions in this page
  icon.svg # the icon
  index.php # the home page
  init.php # run with this file
  mark.py # turn markdown into html
  p.php # view a single problem here half done
  problems.php # view the problem list done!
  record.php # view the submissions
```

## 依赖项

- PHP 8
- Python 3.8
  - Markdown
  - pymdown-extensions
