<?php
declare(strict_types=1);

namespace App\Modules\Blogs;

use App\Models\Blogs;

class BlogRepository
{
    const Recent_blog_Limit =5;
    public function getTotalCount(): int
    {
        return Blogs::all()->count() ;
    }

   //** @return Blog[] */

    public function UIList(int $page, int $pageLength, array $filters =[]):array
    {
        if($filters !== []){
            return Blogs::with(["tags"])
                ->where($filters)
                ->where("id", ">" ,0)
                ->limit($pageLength)
                ->offset(($page - 1) * $pageLength)
                ->get()
                ->toArray();
        }
        return Blogs::with(["tags"])
            ->where("id", ">" ,0)
            ->limit($pageLength)
            ->offset(($page - 1) * $pageLength)
            ->orderBy("created_at","desc")
            ->get()
            ->toArray();
    }
    public function UIListRecent():array
    {
        return Blogs::with(["tags"])
            ->where("id", ">" ,0)
            ->limit(self::Recent_blog_Limit)
            ->orderBy("created_at","desc")
            ->get()
            ->toArray();
    }
}
