with open("/home/a/Desktop/devops/2asg/mlog.txt") as f:
       wordcount={}
       for word in f:
           for word in f.read().split():
               if word not in wordcount:
                   wordcount[word] = 1
               else:
                   wordcount[word] += 1
           for k,v in wordcount.items():
                print (k, v)
