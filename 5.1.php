<?php
public static void reOrderArray2(int [] array){
	int i=0;
	int j=array.length;
	int index = -1;
	if(array.length==0){
		return;
	}
	while(i<j){
		if((array[i]&1)==1){
			if(index>=0){

				int ss=array[i];
				for(int in=i;in>index;in--)
					array[i]=array[in-1];
				array[index]=ss;
				index++;
			}
			i++;
			continue;
		}else{
			if(i=0)
				index=0;
			if(index<1)
				index=1;
			i++;
			continue;
		}
	}
}

?>