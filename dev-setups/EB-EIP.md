# EB Settings for EIP

```
https://github.com/oz-sysb/wasabi/blob/develop/.ebextensions/01_environment.config
```
In this specific set up file, look up to the following part

```
21-associate-eip:
    command: |
      eip_list=./.ebextensions/eip.${EB_ENVIRONMENT_NAME}.txt
      if [[ -r "${eip_list}" ]]; then
        # 割り当てる EIP をスペース区切りで指定
        ./.ebextensions/associate-eip.sh "$( tr '\n' ' ' < ${eip_list} )"
      fi
```

You can see that EIP will set as specified in the file `${EB_ENVIRONMENT_NAME}.txt`
> If any EIP changes, check back on that specific file.

- `{EB_ENVIRONMENT_NAME}` can be checked in the Elastic Beanstalk configuration page