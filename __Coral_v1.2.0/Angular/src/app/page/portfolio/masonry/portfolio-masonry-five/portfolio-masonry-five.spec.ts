import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioMasonryFive } from './portfolio-masonry-five';

describe('PortfolioMasonryFive', () => {
  let component: PortfolioMasonryFive;
  let fixture: ComponentFixture<PortfolioMasonryFive>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioMasonryFive]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioMasonryFive);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
