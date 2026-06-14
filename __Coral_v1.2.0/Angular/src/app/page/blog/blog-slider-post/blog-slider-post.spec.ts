import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogSliderPost } from './blog-slider-post';

describe('BlogSliderPost', () => {
  let component: BlogSliderPost;
  let fixture: ComponentFixture<BlogSliderPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogSliderPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogSliderPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
