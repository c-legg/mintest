import markdown
from markdown.extensions.toc import TocExtension
import sys

text=[]

f=open(sys.argv[1], "r", encoding='UTF-8')

text=f.read()

f.close()

markdown_text=""

for i in text:
    markdown_text=markdown_text+i

# 配置 Markdown 解析器
html_output = markdown.markdown(
    markdown_text,
    extensions=[
        'pymdownx.arithmatex',  # 支持 LaTeX 数学公式
        'extra',               # 支持表格、脚注等扩展
        TocExtension(toc_depth=2),  # 支持目录
    ],
    extension_configs={
        'pymdownx.arithmatex': {
            'generic': True,  # 使用通用模式渲染 LaTeX
        }
    }
)

# 输出 HTML
print(html_output)