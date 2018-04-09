##iOS 環境の作り方・CheckList

- Follow instructions on [Github repository](https://github.com/oz-sysb/ikra)
    - Keep in mind that versions are to be updated. 
    - Different versions have different adjustments needed.
- Upload code and environment to DeployGate 
    - this is a common environment - development environment
    - Set up credentials/set up files as [recorded in Github](https://github.com/oz-sysb/wasabi/issues/1373)
- By this point, after the code goes online on DeployGate, it is downloadable from the appstore.
- For upgrades, take in mind of [this issue](https://github.com/oz-sysb/ikra/issues/94), but do take extra steps.
    - Swift version update from 2.x to 4.x (As the most recent version of xCode is 9)
    - XCode 9 does NOT support Swift migration from 2.x to 4.x
    - Swift 2.x -> 3.x : By downloading XCode 8.
    - Swift 3.x -> 4.x : From XCode 9
    - For each step, do Syntax Check (Built in XCode), go through regression test lists so that all the functions work as intended.
- Check all the dependet Libraries and their versions.
- When codes are updated accordingly, merge it to the release branch